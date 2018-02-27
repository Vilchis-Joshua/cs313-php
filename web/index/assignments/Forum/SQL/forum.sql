-- Table: public.forum

-- DROP TABLE public.forum;

CREATE TABLE public.forum
(
    forum_id integer NOT NULL DEFAULT nextval('forum_forum_id_seq'::regclass),
    users_id integer NOT NULL,
    post_id integer NOT NULL,
    CONSTRAINT forum_pkey PRIMARY KEY (forum_id, users_id, post_id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.forum
    OWNER to postgres;



-- Table: public.users

-- DROP TABLE public.users;

CREATE TABLE public.users
(
    users_id integer NOT NULL DEFAULT nextval('users_users_id_seq'::regclass),
    users_username character varying COLLATE pg_catalog."default" NOT NULL,
    users_password character varying COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT users_pkey PRIMARY KEY (users_id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.users
    OWNER to postgres;




-- Table: public.post

-- DROP TABLE public.post;

CREATE TABLE public.post
(
    post_id integer NOT NULL DEFAULT nextval('post_post_id_seq'::regclass),
    post_date date NOT NULL,
    post_content character varying COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT post_pkey PRIMARY KEY (post_id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.post
    OWNER to postgres;






-- Table: public.discussion

-- DROP TABLE public.discussion;

CREATE TABLE public.discussion
(
    discussion_id integer NOT NULL DEFAULT nextval('discussion_discussion_id_seq'::regclass),
    discussion_title character varying COLLATE pg_catalog."default" NOT NULL,
    discussion_date date NOT NULL,
    discussion_initial_content character varying COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT discussion_pkey PRIMARY KEY (discussion_id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.discussion
    OWNER to postgres;







TRUNCATE DISCUSSION CASCADE;
ALTER SEQUENCE discussion_discussion_id_seq RESTART;
TRUNCATE FORUM CASCADE;
ALTER SEQUENCE forum_forum_id_seq RESTART;
TRUNCATE POST CASCADE;
ALTER SEQUENCE post_post_id_seq RESTART;
TRUNCATE USERS CASCADE;
ALTER SEQUENCE users_users_id_seq RESTART;



-- Discussion insert
INSERT INTO DISCUSSION VALUES(
   DEFAULT,
   'Cyberbullying - Myth or real?',
   (SELECT now()),
   'For this initial post, I just want to point out that there are many who do not believe that cyberbullying is real or a problem. We do however know, and we want to spread the word'
);