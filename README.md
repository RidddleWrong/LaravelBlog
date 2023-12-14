# LaravelBlog проект

Ласкаво просимо до проекту LaravelBlog. Цей README містить необхідну інформацію для комфортної роботи з проектом. Дотримуйтеся цих кроків для початку:

## Початкове налаштування

1. Після клонування проекту виконайте наступні команди:
   ```bash
   npm install
   composer install
   composer update
    ```

2. Використовуйте файл `.env.example`, щоб створити файл `.env`. Вкажіть назву бази даних, з якою ви плануєте працювати. Потім виконайте:
    ```bash
    php artisan key:generate # Генерує APP_KEY в .env
    ```

## Ініціалізація бази даних

3. Оберіть один з варіантів:

    - **Варіант 1: Імпорт SQL-файлу**
        - Імпортуйте `LaravelBlog.sql` (знаходиться в кореневому каталозі) до вашої бази даних. Назвіть базу даних відповідно (зверніть увагу на назву для файлу `.env`).

    - **Варіант 2: Використання функціоналу фабрики**
        - Запустіть наступну команду для створення таблиць і заповнення бази даних:
            ```
            php artisan migrate --seed
            ```
        - В цьому варіанті генеруються випадкові зображення за допомогою `PostFactory`, уникнувши необхідності налаштовувати їх вручну.

## Створення символічного посилання на сховище

4. Створіть символічне посилання `public/storage`:
    ```
    php artisan storage:link
    ```
   Це дозволить нам використовувати зображення за допомогою методу `asset()` з папки public.

## Доступ до панелі адміністратора

5. Для доступу до панелі адміністратора:

    - **Варіант 1: Якщо в пункті 3 ви використали LaravelBlog.sql опцію**
        - Увійдіть з наступними обліковими даними:
            - Електронна пошта: admin@admin.com
            - Пароль: 1 (для всіх користувачів)
        - На головній сторінці блогу натисніть кнопку "personal" у правому верхньому куті, перейдіть у свій обліковий запис і натисніть кнопку "Панель адміністратора" в лівому боці.

    - **Варіант 2: Якщо в пункті 3 ви використали опцію фабрик**
        - Створіть або відредагуйте існуючого користувача, встановіть роль з 1 (користувач) на 0 (адміністратор), і якщо потрібно змініть імеїл.
        - Виконайте кроки з Варіанту 1, замінюючи електронну адресу на свою відредаговану версію.



# LaravelBlog Project

Welcome to the LaravelBlog project. This README provides essential information for a seamless experience with the project. Please follow these steps to get started:

## Initial Setup

1. After pulling the project, run the following commands:
    ```bash
    npm install
    composer install
    composer update
    ```

2. Use the `.env.example` file to create a `.env` file. Specify the database name you intend to use. Then run:
    ```bash
    php artisan key:generate # Generates APP_KEY in .env
    ```

## Database Initialization

3. Choose one of the following options:

    - **Option 1: Import SQL File**
        - Import `LaravelBlog.sql` (found in the root directory) into your database. Name your database accordingly and note the name in the `.env` file.

    - **Option 2: Use Factory Functionality**
        - Run the following command to create tables and seed the database:
            ```bash
            php artisan migrate --seed
            ```
        - This option generates random images using the `PostFactory`, eliminating the need to set them manually.

## Storage Link

4. Create a symbolic link `public/storage`:
    ```bash
    php artisan storage:link
    ```
   This enables possibility of using images with the `asset()` method from the public folder.

## Admin Panel Access

5. To access the Admin Panel:

    - **Option 1: If you chose the LaravelBlog.sql option in step 3**
        - Login with the following credentials:
            - Email: admin@admin.com
            - Password: 1 (for all users)
        - On the main blog page, click the "Personal" button in the top-right, navigate to your account, and click the Admin Panel button in the left sidebar.

    - **Option 2: If you chose the factory option in step 3**
        - Create or edit an existing user, set the role value to 0(admin), and change the email if needed.
        - Follow the steps from Option 1, replacing the email with your adjusted version.



