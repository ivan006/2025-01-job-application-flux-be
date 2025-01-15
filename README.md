# **Approach**

This project is built using a suite of libraries I developed called **WizWeb** to streamline development. WizWeb simplifies both back-end and front-end processes, making it faster and more efficient to set up and build applications.

For more information about WizWeb, visit:  
[https://github.com/ivan006/2024-05-wizweb-fe](https://github.com/ivan006/2024-05-wizweb-fe)

---

# **Setup Instructions**

## **Back-End Setup**

- Install **Laragon**.
- Clone the back-end repository:  
  [https://github.com/ivan006/2025-01-job-application-flux-be](https://github.com/ivan006/2025-01-job-application-flux-be)  
  into Laragon's active folder and restart Laragon. This will automatically create a local domain:  
  `http://2025-01-job-application-flux-be.test`
- Open your database management tool and create a database named:  
  `2025-01-job-application-flux-be`
- Copy `.env.example` to `.env` and update the database credentials and other required information.
- Navigate to the back-end folder and run the following command to install dependencies:
  ```bash
  composer install
  ```
  *(Ensure you have Composer version 2.7.2 or later installed.)*
- In your browser, go to:  
  `http://2025-01-job-application-flux-be.test`  
  and click **"Generate App Key"**.
- Run the following command in the back-end folder to apply the new key:
  ```bash
  php artisan optimize
  ```
- Refresh the browser at:  
  `http://2025-01-job-application-flux-be.test`  
  You should now see the Laravel version displayed in JSON format.
- Run the database migrations:
  ```bash
  php artisan migrate
  ```

---

## **Front-End Setup**

- Clone the front-end repository:  
  [https://github.com/ivan006/2025-01-job-application-flux-fe](https://github.com/ivan006/2025-01-job-application-flux-fe)
- Navigate to the front-end folder and run the following command to install dependencies:
  ```bash
  npm install
  ```
  *(I have npm version 8.18.0 and Node.js version 18.8.0 installed.)*
- Copy `.env.development.example` to `.env.development` and set `VITE_API_BACKEND_URL` to the correct back-end URL.
- Start the development server:
  ```bash
  npm run dev
  ```

---


## **Seeding**

- Using a database management tool, go to the database's `task_statuses` table and create 1 record with the name "Complete".
- Register an account through the front-end (no need to verify through email).

