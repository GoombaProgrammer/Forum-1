-- Forum Database Schema

CREATE TABLE categories (
    cat_id INT AUTO_INCREMENT PRIMARY KEY,
    cat_name VARCHAR(255) NOT NULL,
    cat_description TEXT NOT NULL
);

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,
    user_pass VARCHAR(40) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_date DATETIME NOT NULL,
    user_level INT NOT NULL
);

CREATE TABLE topics (
    topic_id INT AUTO_INCREMENT PRIMARY KEY,
    topic_subject VARCHAR(255) NOT NULL,
    topic_date DATETIME NOT NULL,
    topic_cat INT NOT NULL,
    topic_by INT NOT NULL,
    FOREIGN KEY (topic_cat) REFERENCES categories(cat_id),
    FOREIGN KEY (topic_by) REFERENCES users(user_id)
);

CREATE TABLE posts (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    post_content TEXT NOT NULL,
    post_date DATETIME NOT NULL,
    post_topic INT NOT NULL,
    post_by INT NOT NULL,
    FOREIGN KEY (post_topic) REFERENCES topics(topic_id),
    FOREIGN KEY (post_by) REFERENCES users(user_id)
);
