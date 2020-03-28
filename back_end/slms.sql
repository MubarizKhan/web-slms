CREATE Database slms;
use slms

-- Created by:

    -- Mubeen Ghauri P17-6107
    -- Mubariz Khan P18-0010

-- Project Description:
    -- This is a simple library management system, This database contains three tables, 
    -- 1. Adminstrator
    -- 2. User 
    -- 3. Books

    -- The Adminstrator side, will have the authority to manipulate the Books table, The Administrator side can
        -- * Add Books
        -- *Show Borrowed Books
        -- *Remove Books
        -- *View User details
        -- *View Overdue Books
        -- *Remove user

    -- user table; will be used for logging in; will require a password and login id
    -- this table will also have all the details of the user; email, address, etc 
    -- Self profile viewing


    --The Books table will hold book information such as book id , Publisher, quanity,  and serial id 

create table _user_(

    u_name varchar(24) not null,
    u_password varchar(24) not null,
    roll_no varchar(12) not null,
    

    u_address varchar(75) not null,
    blood_group VARCHAR(5) not null,
    city varchar(24) not null,

    u_email varchar(24) not null,
    books_borrowed varchar(45) -- maximum number of books to be borrowed should be 2
    

);

create table administrator(
    a_name varchar(24) not null,
    a_password varchar(24) not null

);


create table books(

    title varchar(24) not null,
    book_id varchar(24) not null,   -- books with the same name; will have same same book id 
    author varchar(24) not null,

    publisher varchar(24) not null,
    genre varchar(12) not null,

    
    serial_book_id varchar(24) not null -- serial id is neccessary as books with same name but different quantity


);

insert into books(title, book_id, author, publisher, genre, serial_book_id) VALUES
(
    'Harry Potter' , '001' , 'J.K Rowling' , 'Puffins' , 'fantasy' , '000'
);

insert into books(title, book_id, author, publisher, genre, serial_book_id) VALUES
(
    
    'Scooby doo' , '0021' , 'MB Hoffman' , 'Puffins' , 'Kids' , '0013'
);

-- '40 rules of Love' , '002' , 'ELif Shafak' , 'Puffins' , 'Sufiism' , '001'

insert into _user_(u_name, u_password, roll_no, u_address, blood_group, city, u_email) VALUES
(
    'mubariz', 'mak', 'P180010', '563, W4, Hayatabad, Peshawar', 'B+','lahore', 'mx@gmail.com'
);


insert into _user_(u_name, u_password, roll_no,  u_address,  blood_group, city, u_email ) VALUES
(
    'mubeen', 'been', 'P17-6107', '563, W4, Hayatabad, Peshawar', 'B+', 'lahore',  'ghauri.mubeen@gmail.com'
);

insert into administrator(a_name, a_password) values ("root", "root");









