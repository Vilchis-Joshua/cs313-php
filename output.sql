--
-- PostgreSQL database dump
--

-- Dumped from database version 10.2 (Ubuntu 10.2-1.pgdg14.04+1)
-- Dumped by pg_dump version 10.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: discussion; Type: TABLE; Schema: public; Owner: ydmjggcoixwxep
--

CREATE TABLE discussion (
    discussion_id integer NOT NULL,
    discussion_title character varying NOT NULL,
    discussion_date date NOT NULL,
    discussion_initial_content character varying NOT NULL
);


ALTER TABLE discussion OWNER TO ydmjggcoixwxep;

--
-- Name: discussion_discussion_id_seq; Type: SEQUENCE; Schema: public; Owner: ydmjggcoixwxep
--

CREATE SEQUENCE discussion_discussion_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE discussion_discussion_id_seq OWNER TO ydmjggcoixwxep;

--
-- Name: discussion_discussion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ydmjggcoixwxep
--

ALTER SEQUENCE discussion_discussion_id_seq OWNED BY discussion.discussion_id;


--
-- Name: forum; Type: TABLE; Schema: public; Owner: ydmjggcoixwxep
--

CREATE TABLE forum (
    forum_id integer NOT NULL,
    users_id integer NOT NULL,
    post_id integer NOT NULL
);


ALTER TABLE forum OWNER TO ydmjggcoixwxep;

--
-- Name: forum_forum_id_seq; Type: SEQUENCE; Schema: public; Owner: ydmjggcoixwxep
--

CREATE SEQUENCE forum_forum_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE forum_forum_id_seq OWNER TO ydmjggcoixwxep;

--
-- Name: forum_forum_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ydmjggcoixwxep
--

ALTER SEQUENCE forum_forum_id_seq OWNED BY forum.forum_id;


--
-- Name: post; Type: TABLE; Schema: public; Owner: ydmjggcoixwxep
--

CREATE TABLE post (
    post_id integer NOT NULL,
    post_date character varying NOT NULL,
    post_content character varying NOT NULL
);


ALTER TABLE post OWNER TO ydmjggcoixwxep;

--
-- Name: post_post_id_seq; Type: SEQUENCE; Schema: public; Owner: ydmjggcoixwxep
--

CREATE SEQUENCE post_post_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE post_post_id_seq OWNER TO ydmjggcoixwxep;

--
-- Name: post_post_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ydmjggcoixwxep
--

ALTER SEQUENCE post_post_id_seq OWNED BY post.post_id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: ydmjggcoixwxep
--

CREATE TABLE users (
    users_id integer NOT NULL,
    users_username character varying NOT NULL,
    users_password character varying NOT NULL
);


ALTER TABLE users OWNER TO ydmjggcoixwxep;

--
-- Name: users_users_id_seq; Type: SEQUENCE; Schema: public; Owner: ydmjggcoixwxep
--

CREATE SEQUENCE users_users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_users_id_seq OWNER TO ydmjggcoixwxep;

--
-- Name: users_users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ydmjggcoixwxep
--

ALTER SEQUENCE users_users_id_seq OWNED BY users.users_id;


--
-- Name: discussion discussion_id; Type: DEFAULT; Schema: public; Owner: ydmjggcoixwxep
--

ALTER TABLE ONLY discussion ALTER COLUMN discussion_id SET DEFAULT nextval('discussion_discussion_id_seq'::regclass);


--
-- Name: forum forum_id; Type: DEFAULT; Schema: public; Owner: ydmjggcoixwxep
--

ALTER TABLE ONLY forum ALTER COLUMN forum_id SET DEFAULT nextval('forum_forum_id_seq'::regclass);


--
-- Name: post post_id; Type: DEFAULT; Schema: public; Owner: ydmjggcoixwxep
--

ALTER TABLE ONLY post ALTER COLUMN post_id SET DEFAULT nextval('post_post_id_seq'::regclass);


--
-- Name: users users_id; Type: DEFAULT; Schema: public; Owner: ydmjggcoixwxep
--

ALTER TABLE ONLY users ALTER COLUMN users_id SET DEFAULT nextval('users_users_id_seq'::regclass);


--
-- Data for Name: discussion; Type: TABLE DATA; Schema: public; Owner: ydmjggcoixwxep
--

COPY discussion (discussion_id, discussion_title, discussion_date, discussion_initial_content) FROM stdin;
1	Cyberbullying - Myth or real?	2018-02-27	For this initial post, I just want to point out that there are many who do not believe that cyberbullying is real or a problem. We do however know, and we want to spread the word
\.


--
-- Data for Name: forum; Type: TABLE DATA; Schema: public; Owner: ydmjggcoixwxep
--

COPY forum (forum_id, users_id, post_id) FROM stdin;
1	1	1
\.


--
-- Data for Name: post; Type: TABLE DATA; Schema: public; Owner: ydmjggcoixwxep
--

COPY post (post_id, post_date, post_content) FROM stdin;
1	2018-02-27 16:22:20.440583+00	Hello, I believe in you
2	2018-02-27 16:30:27.210185+00	hello
3	2018-02-27 16:38:06.015919+00	EIs this working?
4	2018-02-27 16:38:14.979716+00	Enter text here...
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: ydmjggcoixwxep
--

COPY users (users_id, users_username, users_password) FROM stdin;
1	a	$2y$10$TcigxWXiUNuQVhqWhA/7feZ1qhUNLre2A.MWfB96yKu0iKE9KIj4C
2	b	$2y$10$SbhLkcgw6vrUFBZzfSKFcObJvfl4j8B48It08Vw6tdHTyCyg5G96y
3	c	$2y$10$GSyD3oKMxkw99F/XDhHR7ugQIcow1jKi2JmRm3z7Gqg1Sk2G5H9Qm
\.


--
-- Name: discussion_discussion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: ydmjggcoixwxep
--

SELECT pg_catalog.setval('discussion_discussion_id_seq', 1, true);


--
-- Name: forum_forum_id_seq; Type: SEQUENCE SET; Schema: public; Owner: ydmjggcoixwxep
--

SELECT pg_catalog.setval('forum_forum_id_seq', 4, true);


--
-- Name: post_post_id_seq; Type: SEQUENCE SET; Schema: public; Owner: ydmjggcoixwxep
--

SELECT pg_catalog.setval('post_post_id_seq', 4, true);


--
-- Name: users_users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: ydmjggcoixwxep
--

SELECT pg_catalog.setval('users_users_id_seq', 3, true);


--
-- Name: discussion discussion_pkey; Type: CONSTRAINT; Schema: public; Owner: ydmjggcoixwxep
--

ALTER TABLE ONLY discussion
    ADD CONSTRAINT discussion_pkey PRIMARY KEY (discussion_id);


--
-- Name: forum forum_pkey; Type: CONSTRAINT; Schema: public; Owner: ydmjggcoixwxep
--

ALTER TABLE ONLY forum
    ADD CONSTRAINT forum_pkey PRIMARY KEY (forum_id, users_id, post_id);


--
-- Name: post post_pkey; Type: CONSTRAINT; Schema: public; Owner: ydmjggcoixwxep
--

ALTER TABLE ONLY post
    ADD CONSTRAINT post_pkey PRIMARY KEY (post_id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: ydmjggcoixwxep
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (users_id);


--
-- Name: public; Type: ACL; Schema: -; Owner: ydmjggcoixwxep
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO ydmjggcoixwxep;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO ydmjggcoixwxep;


--
-- PostgreSQL database dump complete
--

