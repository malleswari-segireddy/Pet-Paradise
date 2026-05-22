# Pet Paradise 🐾

Pet Paradise is an online pet selling platform developed using Flask and SQLite.  
The application allows users to explore pets based on their preferences and enables sellers to manage pet listings efficiently.

---

## Features

- View available pets
- Explore pets by breed, age, and price
- Seller dashboard for managing pet listings
- Add, update, and delete pet information
- Responsive user interface using HTML and CSS
- Backend integration using Flask
- Database management using SQLite and SQLAlchemy ORM

---

## Tech Stack

### Frontend
- HTML
- CSS
- JavaScript

### Backend
- Flask (Python)

### Database
- SQLite

### ORM
- SQLAlchemy

---

## Project Structure

```bash
Pet-Paradise/
│
├── app.py
├── models.py
├── requirements.txt
├── README.md
│
├── templates/
│   ├── index.html
│   ├── pets.html
│   ├── add_pet.html
│   └── seller_dashboard.html
│
├── static/
│   ├── css/
│   ├── js/
│   └── images/
│
├── database/
│   └── pets.db
│
└── uploads/
    └── pet_images/
```

---

## Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd Pet-Paradise
```

---

### 2. Create Virtual Environment

#### Windows

```bash
python -m venv venv
.\venv\Scripts\Activate
```

#### Linux/Mac

```bash
python3 -m venv venv
source venv/bin/activate
```

---

### 3. Install Dependencies

```bash
pip install -r requirements.txt
```

---

## Running the Application

```bash
python app.py
```

Application runs at:

```text
http://127.0.0.1:5000
```

---

## Future Enhancements

- User authentication
- Advanced search and filters
- Image upload support
- Payment integration
- Pet recommendation system
- Deployment using Docker and AWS

---

## Author

Developed by Malleswari Segireddy