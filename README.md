````markdown
# ☀️ REAN Solar Connect

**🌐 Live Site:** [https://reansolar.com](https://reansolar.com)

REAN Solar Connect is a web-based solution designed to bridge the solar energy supply gap in Nigeria. It connects manufacturers, distributors, recyclers, and end users — helping people and businesses locate verified solar partners near them with ease.

---

## 🚀 Features

- 🌍 **Location-Based Matching** — Find solar manufacturers, distributors, and recyclers in your area.
- 📝 **Waitlist Form** — Collects signups and stores them in a secure database.
- 📬 **Email Notifications** — Sends confirmation emails to subscribers and alerts the admin.
- 📱 **Mobile-First Design** — Fully responsive and touch-friendly.
- 🎨 **Modern UI** — Built using Tailwind CSS and Font Awesome with custom animations.
- 🔐 **Duplicate Protection** — Prevents repeat signups using email uniqueness checks.

---

## 🛠️ Tech Stack

| Layer        | Tools & Tech                            |
|--------------|------------------------------------------|
| Frontend     | HTML5, Tailwind CSS, Font Awesome        |
| Backend      | PHP (Vanilla)                            |
| Database     | MySQL                                    |
| Email        | PHPMailer with SMTP (Hostinger)          |
| Deployment   | Hostinger + GitHub                       |

---

## 📸 Screenshots

<!-- Add actual image if available -->
![Screenshot Preview](https://reansolar.com/assets/img/screenshot.jpg)

---

## ⚙️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/Oyedokun-Kehinde/rean-solar.git
cd rean-solar
````

### 2. Set Up the Database

* Create a new MySQL database.
* Import the `users` table using the SQL command:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  phone VARCHAR(20),
  interest_area VARCHAR(50),
  location VARCHAR(100),
  agree TINYINT(1) DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 3. Configure Email Sending

* Upload the full `phpmailer/` folder (from PHPMailer source).
* Update `send_email.php` with your actual SMTP credentials from Hostinger:

```php
$mail->Host       = 'smtp.hostinger.com';
$mail->Username   = 'admin@reansolar.com';
$mail->Password   = 'your-password';
```

> **Note:** Port `587` with `'tls'` encryption is recommended.

---

## 🧪 Testing It Live

Once deployed:

* Go to [https://reansolar.com](https://reansolar.com)
* Click **"Join Waitlist"** and fill the popup form
* The system will:

  * Save user data to MySQL
  * Check for duplicate emails
  * Send confirmation and admin notification emails via PHPMailer

---

## 🧠 Credits

Built with ❤️ by [Decimal Technologies](mailto:decimaltechy@gmail.com)

> *Note: Not affiliated with the Renewable Energy Association of Nigeria (REAN)*

---

## 🌟 Contribute

Pull requests are welcome! Let’s build a cleaner, greener Nigeria — one solar panel at a time 🌞

---

## 📄 License

MIT — Feel free to use, extend, or customize this project as you like.

```
