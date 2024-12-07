# Sistema-de-Cocina-KITCHSYS-
# 🍳 **KITCHSYS - Sistema de Gestión de Cocina**

Bienvenido al repositorio oficial de **KITCHSYS**, un sistema diseñado para optimizar la gestión de viandas escolares mediante códigos QR. 🚀

## 📖 **Descripción**
**KITCHSYS** es una plataforma que asegura la distribución eficiente y precisa de medallones alimenticios para estudiantes, reduciendo errores humanos y garantizando un proceso seguro. 

### 🛠️ **Características principales**
- 📋 Registro y autenticación de usuarios.
- 📱 Escaneo de códigos QR para verificación y entrega de viandas.
- 📊 Gestión del inventario de medallones en tiempo real.
- 📈 Generación de reportes para el administrador.
- 🔒 Múltiples capas de seguridad: encriptación de contraseñas, validación de sesiones y protección contra inyecciones SQL.

## 🏗️ **Estructura del Proyecto**

### 🌟 **Módulos principales**
- **`register.php`**: Registro de usuarios.
- **`login.php`**: Inicio de sesión.
- **`escanear_qr.php`**: Escaneo y registro mediante códigos QR.
- **`dashboard.php`**: Panel administrativo.
- **`inventario_medallones.php`**: Gestión del inventario.
- **`reportes.php`**: Generación de reportes.

### 📦 **Base de datos**
El sistema utiliza **MySQL** para almacenar y gestionar:
- Usuarios 👩‍💻
- Inventario de medallones 🍔
- Asistencias 🗓️

### 📑 **Manuales**
El proyecto cuenta con tres manuales detallados:
- **Manual Técnico**: Estructura, instalación y seguridad.
- **Manual de Procedimientos**: Flujo de procesos, desde la generación de QR hasta el almacenamiento en el dashboard.
- **Manual de Usuario**: Guía para el uso del sistema y solución de errores comunes.

## 💻 **Requisitos del Sistema**
- **Hardware**: Servidor con capacidad para bases de datos y almacenamiento de archivos.
- **Software**:
  - PHP 7.4 o superior.
  - Servidor web (Apache/Nginx).
  - MySQL.
  - Tailwind CSS para diseño responsivo.

## 🚀 **Instalación**
1. Clona este repositorio:
    ```bash
    git clone https://github.com/11Elian10/Sistema-de-Cocina-KITCHSYS-
    ```
2. Configura el servidor web con Apache o Nginx.
3. Crea la base de datos ejecutando el script `kitchsys_db.sql`.
4. Configura los archivos en el servidor y ajusta los permisos.
5. Accede al sistema desde tu navegador. 🌐

## 🔧 **Uso**
### 🧑‍🎓 **Usuarios**
1. Regístrate o inicia sesión.
2. Escanea tu código QR para registrar asistencia o retirar tu vianda.

### 👩‍💼 **Administradores**
1. Accede al dashboard para gestionar usuarios, inventario y reportes.
2. Supervisa en tiempo real el proceso de entrega.

## 🛡️ **Seguridad**
- Encriptación de contraseñas.
- Validación de sesiones activas.
- Protección contra inyecciones SQL y ataques comunes.

## ⚠️ **Solución de Problemas**
- Si no puedes iniciar sesión, revisa tus credenciales o contacta soporte técnico.
- Si el escaneo de códigos QR falla, refresca la página o intenta nuevamente.
- Para otros problemas, consulta el manual de usuario o el soporte técnico.

## 🤝 **Colaboradores**
Creado por estudiantes de la **E.E.S.T N°4**:
- 👨‍💻 Patricio Elian
- 👩‍💻 Báez Priscila
- 👩‍💻 Monteros Lucía
- 👨‍💻 Portuesi Benjamín
- 👨‍💻 Ramírez Tomás

## 🌟 **Contribuye**
¡Las contribuciones son bienvenidas! Si encuentras errores o tienes ideas para mejorar el sistema, no dudes en crear un _issue_ o enviar un _pull request_.

## 📜 **Licencia**
Este proyecto está bajo la Licencia MIT.

---
✨ **Optimiza la gestión de viandas escolares con KITCHSYS** ✨
