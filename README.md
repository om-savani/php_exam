# 🚆 PHP API Practical Exam - Railway Train Booking System

This project is a **PHP-based RESTful API** developed for a **Railway Train Booking System**, designed to be consumed by a **Flutter frontend**. It demonstrates the practical implementation of **CRUD operations** with **foreign key constraints (ON CASCADE)** using **MySQL**.

---

## 📚 Modules Implemented

The project includes the following modules:

- **Trains**
- **Passengers**

All modules are interconnected with proper **foreign key relations** and handle **ON CASCADE delete/update** functionality where applicable.

---

## 🔧 Functionalities

All **CRUD functionalities** are implemented for each table.

**Screenshot:**

<img src="https://github.com/user-attachments/assets/ff164299-4459-4a57-87c7-8a94cabe22d4" width="250" height="300" />
<img src="https://github.com/user-attachments/assets/2098dabc-97f1-4292-bb38-c622bb2300dc" width="250" height="300" />
<img src="https://github.com/user-attachments/assets/2090ebb3-9649-4095-a711-7e9e74172ec0" width="250" height="300" />
<img src="https://github.com/user-attachments/assets/5a0474a1-bada-42bb-b714-a5064d7f5ac4" width="250" height="300" />
<img src="https://github.com/user-attachments/assets/d9636123-8c44-483b-9739-2a3d1247229b" width="250" height="300" />
<img src="https://github.com/user-attachments/assets/8d35d45b-c30b-41a7-9f16-2c064802107e" width="250" height="300" />
<img src="https://github.com/user-attachments/assets/ca260e45-247f-4080-a0c8-f15de8645af1" width="250" height="300" />
<img src="https://github.com/user-attachments/assets/8be262a0-ede2-419d-89d7-70b39cf62f18" width="250" height="300" />
<img src="https://github.com/user-attachments/assets/5db84013-a393-42ad-a51d-45444f68916f" width="250" height="300" />
<img src="https://github.com/user-attachments/assets/51b9edea-770b-4f47-988e-3086ed9907fe" width="250" height="300" />


---

## 🔗 Foreign Key Implementation

**Foreign key constraints** have been implemented across the modules to ensure **data integrity**. The `ON DELETE CASCADE` and `ON UPDATE CASCADE` options are enabled to maintain **relational consistency**.

**Example:**

```sql
FOREIGN KEY (train_id) REFERENCES trains(id) ON DELETE CASCADE ON UPDATE CASCADE
