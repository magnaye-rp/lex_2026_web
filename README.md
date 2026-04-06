# 🎓 Learning Express Program 2026 Web App

A lightweight, responsive web platform designed to manage and track a multi-day academic program.

This system provides participants and organizers with a centralized dashboard for schedules, real-time activity tracking, and venue navigation.

---

## 🚀 Features

### 📅 Dynamic Schedule
- View full program schedule by day
- Automatically highlights the **current activity**
- Displays **next upcoming session**
- Includes a simple countdown timer

### 📍 Venue Map Integration
- View locations of activities
- Open directions via Google Maps

### 🔔 Notifications (Basic)
- Session reminders
- Announcements from admin

### 👤 User System
- Authentication using CodeIgniter 4 Shield
- User profiles

### 🛠️ Admin Panel
- Manage schedules (CRUD)
- Manage users
- Post announcements

---

## 🧰 Tech Stack

**Frontend**
- Bootstrap 5
- HTML, CSS, JavaScript

**Backend**
- PHP (CodeIgniter 4)
- RESTful structure

**Database**
- MySQL

**Authentication**
- CodeIgniter Shield

**Maps**
- Google Maps API (or Mapbox alternative)

---

## 📂 Project Structure

```
app/
├── Controllers/
├── Models/
├── Views/
├── Database/
│   └── Migrations/
public/
├── assets/
```

---

## ⚙️ Installation

### 1. Clone the repository
```bash
git clone https://github.com/your-username/learning-express-webapp.git
cd learning-express-webapp
```

### 2. Install dependencies
```bash
composer install
```

### 3. Setup environment
Copy `.env.example` to `.env` and configure:

```env
database.default.hostname = localhost
database.default.database = your_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

---

### 4. Run migrations
```bash
php spark migrate
```

---

### 5. Run the project
```bash
php spark serve
```

Visit:
```
http://localhost:8080
```

---

## 🔐 Authentication Setup

This project uses **CodeIgniter Shield**.

If not yet installed:
```bash
composer require codeigniter4/shield
php spark shield:install
php spark migrate
```

---

## 📅 Core Module: Schedule

Each schedule entry contains:
- Title
- Description
- Venue
- Start Time
- End Time
- Day Number

The system automatically:
- Detects current session
- Highlights active activity
- Shows upcoming activity

---

## 🧭 Roadmap

- [ ] Dynamic schedule UI
- [ ] Current activity tracker
- [ ] Countdown timer
- [ ] Map integration
- [ ] Admin CRUD for schedules
- [ ] Notifications system
- [ ] Mobile UI improvements

---

## 🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first.

---

## 📄 License

This project is for academic and educational purposes.

---

## 👨‍💻 Author

Ryan Paulo D. Magnaye  
BSIT Student

---

## 💡 Notes

This project is designed to be:
- Simple
- Scalable
- Easy to extend

Future improvements may include:
- Real-time tracking
- Push notifications
- Offline support
