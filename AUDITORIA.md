# Auditoría y modernización de Mevo

> Documento vivo. Estado de la revisión iniciada en **junio 2026** sobre el proyecto creado en 2020-2022.
> Resume qué es la app, los hallazgos de la auditoría, qué se corrigió y qué queda pendiente.

---

## 1. Qué es Mevo

Marketplace B2B de productos (químicos/industriales) con sistema de **reservas/compras**. Un **admin** gestiona el catálogo (con ficha COA/MSDS, precios de reserva y venta, imágenes) y los usuarios; los **usuarios** (clientes) ven el catálogo con disponibilidad en vivo, reservan o compran productos (con opción de entrega) y siguen el estado de sus pedidos. Notifica por email a clientes y a atención al cliente.

**Stack original:** Laravel 5.8 · PHP 7.1-7.4 · MySQL · Laravel Mix (webpack 4) + Vue 2 + Bootstrap 5 + jQuery.

## 2. Entorno de desarrollo

Se corre con **DDEV** (PHP 7.4, MariaDB 10.4). Ver comandos en la sección 6.

- App: `https://mevo.ddev.site` · Mailpit: `https://mevo.ddev.site:8026`
- Admin: `admin@conmevo.com` / definido por `ADMIN_PASSWORD` en `.env`.

⚠️ **Parche temporal en `vendor/`:** Laravel 5.8 no lee el `installed.json` de Composer 2 → se parchó `vendor/laravel/framework/.../Foundation/PackageManifest.php`. **Se borra con `composer install`** (no con un `composer update <paquete>`). Se resolverá definitivamente en el upgrade (Laravel 6+ ya lo trae).

---

## 3. Mapa funcional (resumen)

- **Invitado:** landing, contacto, recuperación de contraseña.
- **Usuario:** catálogo con disponibilidad, completar perfil, reservar/comprar, ver pedidos.
- **Admin:** dashboard, CRUD de productos y usuarios, reportes de reservas, gráficos por día, cambio de estado de pedidos.
- **Emails (6):** cuenta nueva, nuevo producto (a todos), nuevo pedido, cambio de estado, contacto, recuperación de contraseña.

---

## 4. Hallazgos y estado

### 🔴 Críticos — CORREGIDOS
| # | Hallazgo | Estado |
|---|---|---|
| C1/C2 | IDOR: cualquier usuario podía cambiar contraseña/perfil de otro (incl. admin) por rutas duplicadas + falta de chequeo de ownership | ✅ Rutas deduplicadas; `changePassword`/`updateByUser`/`reserveProduct` operan sobre `Auth::user()` |
| C3 | RCE potencial: subida de archivos sin validar tipo/tamaño y con nombre del cliente | ✅ Helper `storeUploadedFile()` con nombre aleatorio + `fileValidationRules()` |
| C4 | `APP_DEBUG=true` filtra secretos en producción | ✅ `.env.example` seguro por defecto (debug off, cookie segura) |
| A1 | Contraseña admin hardcodeada en el seeder (comprometida en git) | ✅ Lee `ADMIN_PASSWORD`; password rotada |

### 🟠 Altos / 🟡 Medios — CORREGIDOS
| Hallazgo | Estado |
|---|---|
| A3 — `rol_id` sin validar al crear usuario | ✅ `exists:roles,id` |
| A2 — validación de entrada ausente | ✅ Añadida en `store`/`update`/`changeStatus`/`reserveProduct` de productos y `update` de usuarios |
| A4 — flujo forgot-password sin expiración, sin throttle, enumeraba emails | ✅ Token de un solo uso con expiración (1h), `throttle:6,1`, respuesta genérica |
| M5 — `getCharts` reventaba con variable indefinida | ✅ Inicializada |
| Bug — imagen de producto se guardaba en columna inexistente `img` | ✅ Usa la columna real `file` |
| Bug — editar usuario sin contraseña la dejaba en blanco | ✅ Solo se actualiza si se ingresa |
| Bug — ruta `/admin/usuarios/{usuario}/update` apuntaba a método inexistente | ✅ Eliminada |
| Bug — relaciones Eloquent rotas en `User.php`/`Products.php` (typo `ReservationProdutcs`, FKs incorrectas, import faltante) | ✅ Corregidas |
| Bug — `/register` daba 500 (layout accedía a `Auth::user()->name` sin usuario) | ✅ `optional(Auth::user())` |
| Incompatibilidad — `egulias/email-validator` 2.1.7 rompe TODA validación y envío de email en PHP 7.4 | ✅ Actualizado a 2.1.25 + regla propia `App\Rules\ValidEmail` |

### Pendiente (para fases siguientes)
- **M4** — al crear usuario se envía la contraseña en claro por email (debería ser un enlace de "establecer contraseña").
- Existe un flujo nativo de reset de Laravel en paralelo al custom; unificar en el upgrade.
- **0% de tests reales** (solo los `ExampleTest` de scaffolding).

---

## 5. Estado de dependencias (todo EOL — pendiente upgrade, Fase 2)

| Paquete | Actual | Objetivo |
|---|---|---|
| laravel/framework | 5.8 (EOL 2020) | 11 |
| PHP | 7.4 | 8.2 / 8.3 |
| vue | 2.5 (EOL) | 3 |
| laravel-mix/webpack 4 | 4.0 (rompe en Node 17+) | Vite |
| axios | 0.18 (CVEs) | 1.6+ |
| fzaninotto/faker, softon/sweetalert | abandonados | fakerphp/faker, realrashid/sweet-alert |

Único helper deprecado en el código: `str_random` (ya reemplazado por `Str::random`).
Repo inflado: source maps y `public/js/test.js` (558 KB) commiteados.

---

## 6. Comandos DDEV

```bash
ddev start / ddev stop      # encender / apagar
ddev launch                 # abrir en el navegador
ddev artisan <cmd>          # ej: migrate, tinker, route:list
ddev composer <cmd>         # composer dentro del contenedor (PHP 7.4)
ddev mailpit                # bandeja de correos de prueba
ddev describe               # URLs y estado
```

Instalación desde cero: `ddev start && ddev composer install && ddev artisan migrate --seed`
(tras `composer install` hay que reaplicar el parche de `PackageManifest` — ver sección 2).
