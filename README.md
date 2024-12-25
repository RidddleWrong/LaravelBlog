# LaravelBlog проект (Eng version will be below)

Ласкаво просимо до проекту LaravelBlog. Цей README містить необхідну інформацію для комфортної роботи з проектом. Дотримуйтеся цих кроків для початку:

## Початкове налаштування

1. Після клонування проекту виконайте наступні команди:
   ```bash
   npm install
   composer install
   ```

## Створення .env файлу
2. За допомогою `.env.example`, створіть файл `.env`. В параметрі DB_DATABASE, вкажіть назву бази даних з якою ви плануєте працювати. Потім виконайте:
    ```bash
    php artisan key:generate
    ```

## Символічне посилання

3. Створіть символічне посилання `public/storage`:
    ```bash
    php artisan storage:link
    ```
    - Дозволяє використовувати зображення за допомогою методу `asset()` з папки `public/storage/images`.

## Налаштування зображень

4. Перенесіть директорії public/factory/ images і images_copy у створену вище 'папку' public/storage

## Ініціалізація бази даних

5. Запустіть наступну команду:
    ```bash
    php artisan migrate --seed # За допомогою `PostFactory` генеруються випадкові зображення.
    ```
    - При видаленні всіх дефолтних зображень з папки `public/storage/images` використайте папку `public/storage/images_copy` і оновіть зображення 

## Адміністративна панель

6. Для доступу до Панелі адміністратора:
    - Увійдіть за допомогою наступних облікових даних:
        - Email: admin@gmail.com (роль Admin - з доступом до адміністративної панелі) АБО user@gmail.com (роль User - без доступу до адміністративної панелі)
        - Пароль: встановлено як 1 (для всіх користувачів)
    - На головній сторінці блогу натисніть на особистий значок у верхньому правому куті, перейдіть до свого облікового запису
    - Нажміть на іконку "Admin Panel" у лівій боковій панелі (тільки для адміністраторів).


# LaravelBlog Project

Welcome to the LaravelBlog project. This README provides essential information for a seamless experience with the project. Please follow these steps to get started:

## Initial Setup

1. After pulling the project, run the following commands:
    ```bash
    npm install
    composer install
    ```

## Creating .env file

2. Use the `.env.example` file to create an`.env` file. Specify the database name you intend to work with. Then run:
    ```bash
    php artisan key:generate 
    ```

## Storage Link

3. Create a symbolic link `public/storage`:
    ```bash
    php artisan storage:link
    ```
    - Enables images usage with the `asset()` method from the `public/storage/images` folder.

## Image transfer

4. Transfer the public/factory/ images and images_copy folders into created above 'directory' public/storage      

## Database Initialization

5. Run the following command:
    ```bash
    php artisan migrate --seed # The random images are generated using the `PostFactory`
    ```
    - When all default images are deleted from the `public/storage/images` folder, use the `public/storage/images_copy` folder and update the images.


## Admin Panel 

6. To access the Admin Panel:
    - Login with the following credentials:
        - Email: admin@gmail.com (role Admin - with admin panel acess) OR user@gmail.com (role User - no admin panel access)
        - Password: set to 1 (for all users)
    - On the main blog page, click the personal icon in the top-right, navigate to your account
    - Click the Admin Panel icon in the left sidebar (only for admin users).
    



