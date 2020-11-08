create table if not exists comments (
    id int(11) not null auto_increment primary key,
    author text not null,
    msg text not null
);

insert into comments (author, msg) values ('John', 'this is a test msg from john');
insert into comments (author, msg) values ('Alice', 'this is a test msg from alice');
insert into comments (author, msg) values ('Bob', 'this is a test msg from bob');
insert into comments (author, msg) values ('Greg', 'this is a test msg from greg');
insert into comments (author, msg) values ('Walter', 'this is a test msg from walter');