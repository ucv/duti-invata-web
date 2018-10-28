create table admin_menu
(
  id   int auto_increment
  constraint `PRIMARY`
  primary key,
  text varchar(255) default '0' not null,
  link varchar(255) default '0' not null
);

INSERT INTO duti_blog.admin_menu (id, text, link) VALUES (1, 'Dashboard', '/admin/');
INSERT INTO duti_blog.admin_menu (id, text, link) VALUES (2, 'Posts', '/admin/posts/');
INSERT INTO duti_blog.admin_menu (id, text, link) VALUES (3, 'Menu Items', '/admin/menu/');