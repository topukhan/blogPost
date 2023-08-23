# Simple Blog Post CRUD Application

This is a simple mini project that demonstrates a blog post CRUD application with user-post one-to-many relationship and search functionality.

## Key Features

- **User Authentication:** Implements user registration and login using Laravel's default auth system with email.
- **User-Post Relationship:** Defines a one-to-many relationship between users and posts (a user can have multiple posts).
- **Blog Listing Page:** Displays a list of blog posts with titles, excerpts, and authors.
- **Create New Blog Posts:** Provides a dynamic form for users to create new blog posts, including fields for title, content, and optional image upload.
- **Validation:** Enforces basic validation rules for form fields.
- **Search Functionality:** Implements a search bar on the blog listing page, allowing users to search for posts by title.
- **Pagination:** Adds pagination to the blog listing page, displaying a limited number of posts per page.
- **User Interface:** Designs the user interface using Tailwind CSS for a clean and modern look.
- **Database Operations:** Utilizes Laravel's Eloquent ORM for efficient database operations.

## Getting Started

1. Clone the repository to your local machine.
2. Install Composer Dependencies: Run `composer install`.
3. Copy `.env.example` to `.env` and configure your database settings.
4. Generate Application Key: Run `php artisan key:generate`.
5. Run Database Migrations: Run `php artisan migrate`.
6. Install Node Dependencies: Run `npm install`.
7. Compile Assets: Run `npm run dev`.
8. Start the Development Server: Run `php artisan serve`.

## Usage

- Register a new user account and log in.
- Create, read, update, and delete blog posts.
- Explore the blog listing page to view posts' titles, excerpts, and authors.
- Use the search bar on the blog listing page to search for posts by title.

## Credits

This project is based on the concepts of Laravel, Tailwind CSS, and basic CRUD operations. It was created for learning purposes and demonstrates fundamental concepts in web development.

## License

This project is open-source and available under the [MIT License](LICENSE).
