--
-- PostgreSQL database dump
--

-- Dumped from database version 10.1
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
-- Name: CART; Type: TABLE; Schema: public; Owner: fvokiaukxctvnn
--

CREATE TABLE "CART" (
    cart_id integer NOT NULL
);


ALTER TABLE "CART" OWNER TO fvokiaukxctvnn;

--
-- Name: CART_cart_id_seq; Type: SEQUENCE; Schema: public; Owner: fvokiaukxctvnn
--

CREATE SEQUENCE "CART_cart_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "CART_cart_id_seq" OWNER TO fvokiaukxctvnn;

--
-- Name: CART_cart_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fvokiaukxctvnn
--

ALTER SEQUENCE "CART_cart_id_seq" OWNED BY "CART".cart_id;


--
-- Name: PRODUCT; Type: TABLE; Schema: public; Owner: fvokiaukxctvnn
--

CREATE TABLE "PRODUCT" (
    product_id numeric(50,0) NOT NULL,
    product_name character varying(100) NOT NULL,
    product_price numeric NOT NULL,
    product_description character varying(100) NOT NULL
);


ALTER TABLE "PRODUCT" OWNER TO fvokiaukxctvnn;

--
-- Name: USER; Type: TABLE; Schema: public; Owner: fvokiaukxctvnn
--

CREATE TABLE "USER" (
    user_id integer NOT NULL,
    user_username character varying(100) NOT NULL,
    user_password character varying(100) NOT NULL
);


ALTER TABLE "USER" OWNER TO fvokiaukxctvnn;

--
-- Name: user_user_id_seq; Type: SEQUENCE; Schema: public; Owner: fvokiaukxctvnn
--

CREATE SEQUENCE user_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_user_id_seq OWNER TO fvokiaukxctvnn;

--
-- Name: user_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fvokiaukxctvnn
--

ALTER SEQUENCE user_user_id_seq OWNED BY "USER".user_id;


--
-- Name: CART cart_id; Type: DEFAULT; Schema: public; Owner: fvokiaukxctvnn
--

ALTER TABLE ONLY "CART" ALTER COLUMN cart_id SET DEFAULT nextval('"CART_cart_id_seq"'::regclass);


--
-- Name: USER user_id; Type: DEFAULT; Schema: public; Owner: fvokiaukxctvnn
--

ALTER TABLE ONLY "USER" ALTER COLUMN user_id SET DEFAULT nextval('user_user_id_seq'::regclass);


--
-- Data for Name: CART; Type: TABLE DATA; Schema: public; Owner: fvokiaukxctvnn
--

COPY "CART" (cart_id) FROM stdin;
\.


--
-- Data for Name: PRODUCT; Type: TABLE DATA; Schema: public; Owner: fvokiaukxctvnn
--

COPY "PRODUCT" (product_id, product_name, product_price, product_description) FROM stdin;
\.


--
-- Data for Name: USER; Type: TABLE DATA; Schema: public; Owner: fvokiaukxctvnn
--

COPY "USER" (user_id, user_username, user_password) FROM stdin;
\.


--
-- Name: CART_cart_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fvokiaukxctvnn
--

SELECT pg_catalog.setval('"CART_cart_id_seq"', 1, false);


--
-- Name: user_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fvokiaukxctvnn
--

SELECT pg_catalog.setval('user_user_id_seq', 1, false);


--
-- Name: CART CART_pkey; Type: CONSTRAINT; Schema: public; Owner: fvokiaukxctvnn
--

ALTER TABLE ONLY "CART"
    ADD CONSTRAINT "CART_pkey" PRIMARY KEY (cart_id);


--
-- Name: PRODUCT PRODUCT_pkey; Type: CONSTRAINT; Schema: public; Owner: fvokiaukxctvnn
--

ALTER TABLE ONLY "PRODUCT"
    ADD CONSTRAINT "PRODUCT_pkey" PRIMARY KEY (product_id);


--
-- Name: USER user_pkey; Type: CONSTRAINT; Schema: public; Owner: fvokiaukxctvnn
--

ALTER TABLE ONLY "USER"
    ADD CONSTRAINT user_pkey PRIMARY KEY (user_id);


--
-- Name: USER cart_id; Type: FK CONSTRAINT; Schema: public; Owner: fvokiaukxctvnn
--

ALTER TABLE ONLY "USER"
    ADD CONSTRAINT cart_id FOREIGN KEY (user_id) REFERENCES "CART"(cart_id);


--
-- Name: CART product_id; Type: FK CONSTRAINT; Schema: public; Owner: fvokiaukxctvnn
--

ALTER TABLE ONLY "CART"
    ADD CONSTRAINT product_id FOREIGN KEY (cart_id) REFERENCES "PRODUCT"(product_id);


--
-- Name: public; Type: ACL; Schema: -; Owner: fvokiaukxctvnn
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO fvokiaukxctvnn;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO fvokiaukxctvnn;


--
-- PostgreSQL database dump complete
--

