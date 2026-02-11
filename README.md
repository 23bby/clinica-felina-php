# 🏥 Clinica Felina: Advanced Management Dashboard

A modern and robust web application for the comprehensive management of a feline-specialized veterinary clinic. This project combines a dynamic frontend with a cutting-edge containerized infrastructure.

## 🛠️ Technology Stack
This project was built using a powerful combination of modern tools:
- **PHP 8.2**: Handling the core business logic and server-side processing.
- **JavaScript**: Powering the interactive elements and dynamic dashboard features.
- **Bootstrap**: Ensuring a clean, responsive, and mobile-friendly user interface.
- **MariaDB 10.11**: Providing a reliable and scalable relational database.
- **Podman**: Delivering a secure, rootless containerized environment.

## 🌟 The Dashboard: The Heart of the Clinic
The dashboard is an intelligent control center where technology meets care:

- **📊 Real-Time Statistics**: Graphical visualization (JS) of daily patient flow and the most administered vaccines.
- **📅 Smart Scheduling**: A management system that cross-references veterinarian availability with clinic time slots.
- **🐱 360° Patient Profile**: Each cat has a dedicated file linking the owner, medical history, and vaccinations.
- **🩺 Veterinary Insights**: Monitoring of shifts and medical specializations within the clinic.

## ⚙️ Infrastructure: Multi-Platform Compatibility
The project uses **Podman**, making it fully compatible with all major operating systems. Whether you are on **Fedora Linux**, **Windows (via WSL2)**, or **macOS**, the environment remains consistent.

### Why Podman?
1. **Security**: Runs in "rootless" mode, reducing risks to the host system.
2. **Performance**: Optimized resource management for Apache and MariaDB.
3. **Cross-Platform**: Run the exact same setup on Linux, Mac, or Windows without configuration headaches.

### System Architecture:
```mermaid
graph TD
    A[User/Browser] -->|Port 8080| B(App Container: PHP + Apache)
    B -->|Network: clinica-net| C(DB Container: MariaDB 10.11)
    C -->|Volume| D[SQL/init.sql]
    B -->|Volume| E[PHP Source Code]
