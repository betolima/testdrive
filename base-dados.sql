--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.4
-- Dumped by pg_dump version 9.2.2
-- Started on 2014-01-16 12:54:59

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

DROP DATABASE api;
--
-- TOC entry 2008 (class 1262 OID 49352)
-- Name: api; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE api WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';


ALTER DATABASE api OWNER TO postgres;

\connect api

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 6 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO postgres;

--
-- TOC entry 2009 (class 0 OID 0)
-- Dependencies: 6
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'standard public schema';


--
-- TOC entry 182 (class 3079 OID 11727)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2011 (class 0 OID 0)
-- Dependencies: 182
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 168 (class 1259 OID 49353)
-- Name: carros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE carros (
    id integer NOT NULL,
    ano numeric(4,0) NOT NULL,
    modelo_id integer NOT NULL,
    foto character varying(150),
    valor numeric(18,2),
    parcelas_id integer NOT NULL,
    valor_total numeric(18,2),
    data timestamp without time zone DEFAULT now() NOT NULL,
    user_id integer,
    marca_id integer NOT NULL,
    user_id_update integer
);


ALTER TABLE public.carros OWNER TO postgres;

--
-- TOC entry 169 (class 1259 OID 49357)
-- Name: carros_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE carros_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.carros_id_seq OWNER TO postgres;

--
-- TOC entry 2012 (class 0 OID 0)
-- Dependencies: 169
-- Name: carros_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE carros_id_seq OWNED BY carros.id;


--
-- TOC entry 170 (class 1259 OID 49359)
-- Name: logs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE logs (
    id integer NOT NULL,
    user_id integer NOT NULL,
    data_login timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.logs OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 49363)
-- Name: logs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE logs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.logs_id_seq OWNER TO postgres;

--
-- TOC entry 2013 (class 0 OID 0)
-- Dependencies: 171
-- Name: logs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE logs_id_seq OWNED BY logs.id;


--
-- TOC entry 172 (class 1259 OID 49365)
-- Name: marcas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE marcas (
    id integer NOT NULL,
    nome character varying(50) NOT NULL,
    data timestamp without time zone DEFAULT now() NOT NULL,
    user_id integer NOT NULL,
    user_id_update integer
);


ALTER TABLE public.marcas OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 49369)
-- Name: marcas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE marcas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.marcas_id_seq OWNER TO postgres;

--
-- TOC entry 2014 (class 0 OID 0)
-- Dependencies: 173
-- Name: marcas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE marcas_id_seq OWNED BY marcas.id;


--
-- TOC entry 174 (class 1259 OID 49371)
-- Name: modelos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE modelos (
    id integer NOT NULL,
    nome character varying(50) NOT NULL,
    data timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.modelos OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 49375)
-- Name: modelos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE modelos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.modelos_id_seq OWNER TO postgres;

--
-- TOC entry 2015 (class 0 OID 0)
-- Dependencies: 175
-- Name: modelos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE modelos_id_seq OWNED BY modelos.id;


--
-- TOC entry 176 (class 1259 OID 49377)
-- Name: papeis; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE papeis (
    id integer NOT NULL,
    nome character varying(50) NOT NULL,
    data timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.papeis OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 49381)
-- Name: papeis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE papeis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.papeis_id_seq OWNER TO postgres;

--
-- TOC entry 2016 (class 0 OID 0)
-- Dependencies: 177
-- Name: papeis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE papeis_id_seq OWNED BY papeis.id;


--
-- TOC entry 178 (class 1259 OID 49383)
-- Name: parcelas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE parcelas (
    id integer NOT NULL,
    maximo integer NOT NULL,
    data timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.parcelas OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 49387)
-- Name: parcelas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE parcelas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.parcelas_id_seq OWNER TO postgres;

--
-- TOC entry 2017 (class 0 OID 0)
-- Dependencies: 179
-- Name: parcelas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE parcelas_id_seq OWNED BY parcelas.id;


--
-- TOC entry 180 (class 1259 OID 49389)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    nome character varying(100) NOT NULL,
    username character varying(50),
    password character varying(50),
    data timestamp without time zone DEFAULT now() NOT NULL,
    papel_id integer NOT NULL,
    rg numeric
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 49393)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 2018 (class 0 OID 0)
-- Dependencies: 181
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- TOC entry 1954 (class 2604 OID 49395)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carros ALTER COLUMN id SET DEFAULT nextval('carros_id_seq'::regclass);


--
-- TOC entry 1956 (class 2604 OID 49396)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY logs ALTER COLUMN id SET DEFAULT nextval('logs_id_seq'::regclass);


--
-- TOC entry 1958 (class 2604 OID 49397)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY marcas ALTER COLUMN id SET DEFAULT nextval('marcas_id_seq'::regclass);


--
-- TOC entry 1960 (class 2604 OID 49398)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY modelos ALTER COLUMN id SET DEFAULT nextval('modelos_id_seq'::regclass);


--
-- TOC entry 1962 (class 2604 OID 49399)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY papeis ALTER COLUMN id SET DEFAULT nextval('papeis_id_seq'::regclass);


--
-- TOC entry 1964 (class 2604 OID 49400)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY parcelas ALTER COLUMN id SET DEFAULT nextval('parcelas_id_seq'::regclass);


--
-- TOC entry 1966 (class 2604 OID 49401)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- TOC entry 1990 (class 0 OID 49353)
-- Dependencies: 168
-- Data for Name: carros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO carros (id, ano, modelo_id, foto, valor, parcelas_id, valor_total, data, user_id, marca_id, user_id_update) VALUES (8, 1995, 1, '073d89746fac7e152243f7106be47eb1.jpg', 8500.00, 1, 8650.00, '2014-01-16 00:25:00.616', 1, 1, 1);
INSERT INTO carros (id, ano, modelo_id, foto, valor, parcelas_id, valor_total, data, user_id, marca_id, user_id_update) VALUES (9, 2010, 2, '', 9850.00, 2, 9900.00, '2014-01-16 00:26:13.503', 1, 3, 1);
INSERT INTO carros (id, ano, modelo_id, foto, valor, parcelas_id, valor_total, data, user_id, marca_id, user_id_update) VALUES (11, 2001, 4, '', 300.00, 1, 600.00, '2014-01-16 10:47:42.468', 1, 2, 1);


--
-- TOC entry 2019 (class 0 OID 0)
-- Dependencies: 169
-- Name: carros_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('carros_id_seq', 11, true);


--
-- TOC entry 1992 (class 0 OID 49359)
-- Dependencies: 170
-- Data for Name: logs; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO logs (id, user_id, data_login) VALUES (4, 1, '2014-01-16 00:23:39.531');
INSERT INTO logs (id, user_id, data_login) VALUES (5, 1, '2014-01-16 11:22:30.172');
INSERT INTO logs (id, user_id, data_login) VALUES (6, 1, '2014-01-16 12:51:57.406');
INSERT INTO logs (id, user_id, data_login) VALUES (7, 2, '2014-01-16 12:52:30.194');


--
-- TOC entry 2020 (class 0 OID 0)
-- Dependencies: 171
-- Name: logs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('logs_id_seq', 7, true);


--
-- TOC entry 1994 (class 0 OID 49365)
-- Dependencies: 172
-- Data for Name: marcas; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO marcas (id, nome, data, user_id, user_id_update) VALUES (2, 'Civic', '2014-01-15 08:16:19.095', 1, NULL);
INSERT INTO marcas (id, nome, data, user_id, user_id_update) VALUES (3, 'Palio', '2014-01-15 08:16:41.575', 1, NULL);
INSERT INTO marcas (id, nome, data, user_id, user_id_update) VALUES (1, 'Corsa', '2014-01-16 11:22:40.5', 1, 1);


--
-- TOC entry 2021 (class 0 OID 0)
-- Dependencies: 173
-- Name: marcas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('marcas_id_seq', 4, true);


--
-- TOC entry 1996 (class 0 OID 49371)
-- Dependencies: 174
-- Data for Name: modelos; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO modelos (id, nome, data) VALUES (1, 'CHEVROLET', '2014-01-13 11:22:44.15');
INSERT INTO modelos (id, nome, data) VALUES (2, 'FIAT', '2014-01-13 11:22:57.456');
INSERT INTO modelos (id, nome, data) VALUES (3, 'HONDA', '2014-01-13 11:23:04.614');
INSERT INTO modelos (id, nome, data) VALUES (4, 'TOYOTA', '2014-01-13 11:23:10.948');


--
-- TOC entry 2022 (class 0 OID 0)
-- Dependencies: 175
-- Name: modelos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('modelos_id_seq', 4, true);


--
-- TOC entry 1998 (class 0 OID 49377)
-- Dependencies: 176
-- Data for Name: papeis; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO papeis (id, nome, data) VALUES (1, 'ADMINISTRADORES', '2014-01-13 11:33:35.073');
INSERT INTO papeis (id, nome, data) VALUES (2, 'FUNCIONÁRIOS', '2014-01-13 11:33:50.298');


--
-- TOC entry 2023 (class 0 OID 0)
-- Dependencies: 177
-- Name: papeis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('papeis_id_seq', 2, true);


--
-- TOC entry 2000 (class 0 OID 49383)
-- Dependencies: 178
-- Data for Name: parcelas; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO parcelas (id, maximo, data) VALUES (1, 3, '2014-01-13 11:25:57.412');
INSERT INTO parcelas (id, maximo, data) VALUES (2, 6, '2014-01-13 11:25:59.481');
INSERT INTO parcelas (id, maximo, data) VALUES (3, 12, '2014-01-13 11:26:02.454');


--
-- TOC entry 2024 (class 0 OID 0)
-- Dependencies: 179
-- Name: parcelas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('parcelas_id_seq', 3, true);


--
-- TOC entry 2002 (class 0 OID 49389)
-- Dependencies: 180
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO users (id, nome, username, password, data, papel_id, rg) VALUES (1, 'ROBERTO S. LIMA', 'betolima', '123', '2014-01-13 16:54:29.954', 1, 2072608124);
INSERT INTO users (id, nome, username, password, data, papel_id, rg) VALUES (2, 'JOÃOZINHO', 'joao', '123', '2014-01-15 00:07:44.917', 2, 1122334455);


--
-- TOC entry 2025 (class 0 OID 0)
-- Dependencies: 181
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 4, true);


--
-- TOC entry 1968 (class 2606 OID 49403)
-- Name: carros_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY carros
    ADD CONSTRAINT carros_pkey PRIMARY KEY (id);


--
-- TOC entry 1970 (class 2606 OID 49405)
-- Name: logs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY logs
    ADD CONSTRAINT logs_pkey PRIMARY KEY (id);


--
-- TOC entry 1972 (class 2606 OID 49407)
-- Name: marcas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY marcas
    ADD CONSTRAINT marcas_pkey PRIMARY KEY (id);


--
-- TOC entry 1974 (class 2606 OID 49409)
-- Name: modelos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY modelos
    ADD CONSTRAINT modelos_pkey PRIMARY KEY (id);


--
-- TOC entry 1976 (class 2606 OID 49411)
-- Name: papeis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY papeis
    ADD CONSTRAINT papeis_pkey PRIMARY KEY (id);


--
-- TOC entry 1978 (class 2606 OID 49413)
-- Name: parcelas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY parcelas
    ADD CONSTRAINT parcelas_pkey PRIMARY KEY (id);


--
-- TOC entry 1980 (class 2606 OID 49415)
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 1981 (class 2606 OID 57429)
-- Name: carros_marca_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carros
    ADD CONSTRAINT carros_marca_id_fkey FOREIGN KEY (marca_id) REFERENCES marcas(id);


--
-- TOC entry 1982 (class 2606 OID 57434)
-- Name: carros_modelo_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carros
    ADD CONSTRAINT carros_modelo_id_fkey FOREIGN KEY (modelo_id) REFERENCES modelos(id);


--
-- TOC entry 1983 (class 2606 OID 57439)
-- Name: carros_parcelas_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carros
    ADD CONSTRAINT carros_parcelas_id_fkey FOREIGN KEY (parcelas_id) REFERENCES parcelas(id);


--
-- TOC entry 1984 (class 2606 OID 57444)
-- Name: carros_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carros
    ADD CONSTRAINT carros_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);


--
-- TOC entry 1985 (class 2606 OID 57449)
-- Name: carros_user_id_update_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carros
    ADD CONSTRAINT carros_user_id_update_fkey FOREIGN KEY (user_id_update) REFERENCES users(id);


--
-- TOC entry 1986 (class 2606 OID 49431)
-- Name: logs_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY logs
    ADD CONSTRAINT logs_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);


--
-- TOC entry 1987 (class 2606 OID 57460)
-- Name: marcas_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY marcas
    ADD CONSTRAINT marcas_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);


--
-- TOC entry 1988 (class 2606 OID 57465)
-- Name: marcas_user_id_update_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY marcas
    ADD CONSTRAINT marcas_user_id_update_fkey FOREIGN KEY (user_id_update) REFERENCES users(id);


--
-- TOC entry 1989 (class 2606 OID 57349)
-- Name: users_papel_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_papel_id_fkey FOREIGN KEY (papel_id) REFERENCES papeis(id);


--
-- TOC entry 2010 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2014-01-16 12:55:00

--
-- PostgreSQL database dump complete
--

