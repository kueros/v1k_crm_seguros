# V1K Insurance CRM Core 🛡️

Este repositorio contiene la **arquitectura base y el núcleo de seguridad** para el ecosistema de gestión de seguros v1King. Está diseñado como un monolito moderno utilizando Laravel 11, enfocado en la gestión de identidades y el control de acceso granular.

## 🚀 Especificaciones del Core

- **Framework:** Laravel 11.x.
- **Seguridad & RBAC:** Implementación nativa de `spatie/laravel-permission` para la gestión de roles y capacidades.
- **Autenticación:** Sistema de perfiles y sesiones preconfigurado con Laravel Breeze.
- **Frontend Strategy:** Implementación de Blade Components y Tailwind CSS para una interfaz administrativa escalable.
- **Data Integrity:** Incluye Seeders automatizados para la provisión de roles administrativos maestros (`SuperAdminSeeder`).

## 🛠️ Stack Técnico

- **Backend:** PHP 8.2+.
- **Frontend:** Tailwind CSS / Vite / Blade.
- **Database Architecture:** Esquema preparado para alta transaccionalidad y auditoría de permisos.

## 📁 Componentes de Infraestructura
- `database/seeders/SuperAdminSeeder.php`: Punto de entrada para la configuración de seguridad del sistema.
- `config/permission.php`: Definición de la lógica de autorización del CRM.
- `resources/views/admin/`: Espacio de trabajo para el desarrollo de módulos de gestión.

---
Este repositorio sirve como el **fundamento técnico** sobre el cual se despliegan los módulos específicos de pólizas, clientes y siniestros.
