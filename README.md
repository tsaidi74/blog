Openclassroom training phase 5 / Blog creation PHP (MVC/POO)
Auhtor : Tahar Saidi

General information : 
Blog development in the framework of an online training developer PHP Symfony.

A. Objective of the blog is to create a light blog with the following functionalities : 
- Homepage with the last 3 posts and blog presentation
- Blog page listing all the posts
- Create a user
- Login
- Admin page with  
  - user's comment control (delete/validate)
  - Add a new post
  - manage existing posts (consult/modify/delete)
- Header with menu and dynamique login placeholder
- Footer with blog information/links
- Possibility to add a comment

B. Insallation (Local / PC): 

1. Install WAMP server on your computer
2. Create a DB called 'blog'
Within the DB create 3 tables : articles - comments - user with the following fields : 
articles :  - id
            - titre
            - contenu
            - date
            - id_user
comments =  - id_comment
            - comment
            - comment_date
            - id_user
            - comment_status 
            - id_article
user :  - id
        - username
        - password

3. Copy the source in the www folder of your wamp folder.

C. Start

1. Launch wampserver
2. Start the blog on your favorite browser : http://localhost/blog
