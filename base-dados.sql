--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.4
-- Dumped by pg_dump version 9.2.2
-- Started on 2014-01-14 00:48:46

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 2004 (class 1262 OID 49152)
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
-- TOC entry 182 (class 3079 OID 11727)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2007 (class 0 OID 0)
-- Dependencies: 182
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 168 (class 1259 OID 49153)
-- Name: CARRO; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "CARRO" (
    "ID" integer NOT NULL,
    "ANO" numeric(4,0) NOT NULL,
    "MODELOID" integer NOT NULL,
    "FOTO" character varying(150),
    "VALOR" numeric(10,2),
    "PARCELASID" integer NOT NULL,
    "VALORTOTAL" numeric(10,2),
    "DATA" timestamp without time zone DEFAULT now() NOT NULL,
    "USERID" integer
);


ALTER TABLE public."CARRO" OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 49165)
-- Name: CARRO_ID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "CARRO_ID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."CARRO_ID_seq" OWNER TO postgres;

--
-- TOC entry 2008 (class 0 OID 0)
-- Dependencies: 171
-- Name: CARRO_ID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "CARRO_ID_seq" OWNED BY "CARRO"."ID";


--
-- TOC entry 170 (class 1259 OID 49162)
-- Name: LOG; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "LOG" (
    "ID" integer NOT NULL,
    "USERID" integer NOT NULL,
    "DATALOGIN" timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public."LOG" OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 49280)
-- Name: LOG_ID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "LOG_ID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."LOG_ID_seq" OWNER TO postgres;

--
-- TOC entry 2009 (class 0 OID 0)
-- Dependencies: 181
-- Name: LOG_ID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "LOG_ID_seq" OWNED BY "LOG"."ID";


--
-- TOC entry 169 (class 1259 OID 49156)
-- Name: MARCA; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "MARCA" (
    "ID" integer NOT NULL,
    "NOME" character varying(50) NOT NULL,
    "DATA" timestamp without time zone DEFAULT now() NOT NULL,
    "USERID" integer NOT NULL
);


ALTER TABLE public."MARCA" OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 49186)
-- Name: MARCA_ID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "MARCA_ID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."MARCA_ID_seq" OWNER TO postgres;

--
-- TOC entry 2010 (class 0 OID 0)
-- Dependencies: 174
-- Name: MARCA_ID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "MARCA_ID_seq" OWNED BY "MARCA"."ID";


--
-- TOC entry 172 (class 1259 OID 49171)
-- Name: MODELO; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "MODELO" (
    "ID" integer NOT NULL,
    "NOME" character varying(50) NOT NULL,
    "DATA" timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public."MODELO" OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 49198)
-- Name: MODELO_ID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "MODELO_ID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."MODELO_ID_seq" OWNER TO postgres;

--
-- TOC entry 2011 (class 0 OID 0)
-- Dependencies: 175
-- Name: MODELO_ID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "MODELO_ID_seq" OWNED BY "MODELO"."ID";


--
-- TOC entry 178 (class 1259 OID 49239)
-- Name: PAPEIS; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "PAPEIS" (
    "ID" integer NOT NULL,
    "NOME" character varying(50) NOT NULL,
    "DATA" timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public."PAPEIS" OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 49237)
-- Name: PAPEIS_ID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "PAPEIS_ID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."PAPEIS_ID_seq" OWNER TO postgres;

--
-- TOC entry 2012 (class 0 OID 0)
-- Dependencies: 177
-- Name: PAPEIS_ID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "PAPEIS_ID_seq" OWNED BY "PAPEIS"."ID";


--
-- TOC entry 173 (class 1259 OID 49181)
-- Name: PARCELAS; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "PARCELAS" (
    "ID" integer NOT NULL,
    "MAXIMO" integer NOT NULL,
    "DATA" timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public."PARCELAS" OWNER TO postgres;

--
-- TOC entry 176 (class 1259 OID 49211)
-- Name: PARCELAS_ID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "PARCELAS_ID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."PARCELAS_ID_seq" OWNER TO postgres;

--
-- TOC entry 2013 (class 0 OID 0)
-- Dependencies: 176
-- Name: PARCELAS_ID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "PARCELAS_ID_seq" OWNED BY "PARCELAS"."ID";


--
-- TOC entry 180 (class 1259 OID 49248)
-- Name: USER; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "USER" (
    "ID" integer NOT NULL,
    "NOME" character varying(100) NOT NULL,
    "LOGIN" character varying(100) NOT NULL,
    "SENHA" character varying(150) NOT NULL,
    "PAPELID" integer NOT NULL,
    "DATA" timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public."USER" OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 49246)
-- Name: USER_ID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "USER_ID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."USER_ID_seq" OWNER TO postgres;

--
-- TOC entry 2014 (class 0 OID 0)
-- Dependencies: 179
-- Name: USER_ID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "USER_ID_seq" OWNED BY "USER"."ID";


--
-- TOC entry 1952 (class 2604 OID 49167)
-- Name: ID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "CARRO" ALTER COLUMN "ID" SET DEFAULT nextval('"CARRO_ID_seq"'::regclass);


--
-- TOC entry 1956 (class 2604 OID 49282)
-- Name: ID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "LOG" ALTER COLUMN "ID" SET DEFAULT nextval('"LOG_ID_seq"'::regclass);


--
-- TOC entry 1954 (class 2604 OID 49188)
-- Name: ID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "MARCA" ALTER COLUMN "ID" SET DEFAULT nextval('"MARCA_ID_seq"'::regclass);


--
-- TOC entry 1958 (class 2604 OID 49200)
-- Name: ID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "MODELO" ALTER COLUMN "ID" SET DEFAULT nextval('"MODELO_ID_seq"'::regclass);


--
-- TOC entry 1962 (class 2604 OID 49242)
-- Name: ID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "PAPEIS" ALTER COLUMN "ID" SET DEFAULT nextval('"PAPEIS_ID_seq"'::regclass);


--
-- TOC entry 1960 (class 2604 OID 49213)
-- Name: ID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "PARCELAS" ALTER COLUMN "ID" SET DEFAULT nextval('"PARCELAS_ID_seq"'::regclass);


--
-- TOC entry 1964 (class 2604 OID 49251)
-- Name: ID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "USER" ALTER COLUMN "ID" SET DEFAULT nextval('"USER_ID_seq"'::regclass);


--
-- TOC entry 1986 (class 0 OID 49153)
-- Dependencies: 168
-- Data for Name: CARRO; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO "CARRO" ("ID", "ANO", "MODELOID", "FOTO", "VALOR", "PARCELASID", "VALORTOTAL", "DATA", "USERID") VALUES (1, 2010, 1, NULL, 33.50, 2, 33.73, '2014-01-13 11:51:00.422', 1);
INSERT INTO "CARRO" ("ID", "ANO", "MODELOID", "FOTO", "VALOR", "PARCELASID", "VALORTOTAL", "DATA", "USERID") VALUES (2, 2011, 2, '', 22.75, 3, 22.66, '2014-01-13 11:51:38.322', 1);


--
-- TOC entry 2015 (class 0 OID 0)
-- Dependencies: 171
-- Name: CARRO_ID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"CARRO_ID_seq"', 2, true);


--
-- TOC entry 1988 (class 0 OID 49162)
-- Dependencies: 170
-- Data for Name: LOG; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2016 (class 0 OID 0)
-- Dependencies: 181
-- Name: LOG_ID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"LOG_ID_seq"', 1, false);


--
-- TOC entry 1987 (class 0 OID 49156)
-- Dependencies: 169
-- Data for Name: MARCA; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2017 (class 0 OID 0)
-- Dependencies: 174
-- Name: MARCA_ID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"MARCA_ID_seq"', 1, false);


--
-- TOC entry 1990 (class 0 OID 49171)
-- Dependencies: 172
-- Data for Name: MODELO; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO "MODELO" ("ID", "NOME", "DATA") VALUES (1, 'CHEVROLET', '2014-01-13 11:22:44.15');
INSERT INTO "MODELO" ("ID", "NOME", "DATA") VALUES (2, 'FIAT', '2014-01-13 11:22:57.456');
INSERT INTO "MODELO" ("ID", "NOME", "DATA") VALUES (3, 'HONDA', '2014-01-13 11:23:04.614');
INSERT INTO "MODELO" ("ID", "NOME", "DATA") VALUES (4, 'TOYOTA', '2014-01-13 11:23:10.948');


--
-- TOC entry 2018 (class 0 OID 0)
-- Dependencies: 175
-- Name: MODELO_ID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"MODELO_ID_seq"', 4, true);


--
-- TOC entry 1996 (class 0 OID 49239)
-- Dependencies: 178
-- Data for Name: PAPEIS; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO "PAPEIS" ("ID", "NOME", "DATA") VALUES (1, 'ADMINISTRADORES', '2014-01-13 11:33:35.073');
INSERT INTO "PAPEIS" ("ID", "NOME", "DATA") VALUES (2, 'FUNCIONÁRIOS', '2014-01-13 11:33:50.298');


--
-- TOC entry 2019 (class 0 OID 0)
-- Dependencies: 177
-- Name: PAPEIS_ID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"PAPEIS_ID_seq"', 2, true);


--
-- TOC entry 1991 (class 0 OID 49181)
-- Dependencies: 173
-- Data for Name: PARCELAS; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO "PARCELAS" ("ID", "MAXIMO", "DATA") VALUES (1, 3, '2014-01-13 11:25:57.412');
INSERT INTO "PARCELAS" ("ID", "MAXIMO", "DATA") VALUES (2, 6, '2014-01-13 11:25:59.481');
INSERT INTO "PARCELAS" ("ID", "MAXIMO", "DATA") VALUES (3, 12, '2014-01-13 11:26:02.454');


--
-- TOC entry 2020 (class 0 OID 0)
-- Dependencies: 176
-- Name: PARCELAS_ID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"PARCELAS_ID_seq"', 3, true);


--
-- TOC entry 1998 (class 0 OID 49248)
-- Dependencies: 180
-- Data for Name: USER; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO "USER" ("ID", "NOME", "LOGIN", "SENHA", "PAPELID", "DATA") VALUES (1, 'ROBERTO S. LIMA', 'betolima', '123456', 1, '2014-01-13 16:54:29.954');
INSERT INTO "USER" ("ID", "NOME", "LOGIN", "SENHA", "PAPELID", "DATA") VALUES (2, 'JOÃOZINHO', 'joao', '123', 2, '2014-01-13 18:48:25.932');


--
-- TOC entry 2021 (class 0 OID 0)
-- Dependencies: 179
-- Name: USER_ID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"USER_ID_seq"', 4, true);


--
-- TOC entry 1967 (class 2606 OID 49185)
-- Name: CARRO_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "CARRO"
    ADD CONSTRAINT "CARRO_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 1971 (class 2606 OID 49291)
-- Name: LOG_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "LOG"
    ADD CONSTRAINT "LOG_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 1969 (class 2606 OID 49197)
-- Name: MARCA_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "MARCA"
    ADD CONSTRAINT "MARCA_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 1973 (class 2606 OID 49205)
-- Name: MODELO_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "MODELO"
    ADD CONSTRAINT "MODELO_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 1977 (class 2606 OID 49245)
-- Name: PAPEIS_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "PAPEIS"
    ADD CONSTRAINT "PAPEIS_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 1975 (class 2606 OID 49222)
-- Name: PARCELAS_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "PARCELAS"
    ADD CONSTRAINT "PARCELAS_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 1979 (class 2606 OID 49254)
-- Name: USER_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "USER"
    ADD CONSTRAINT "USER_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 1980 (class 2606 OID 49265)
-- Name: CARRO_MODELOID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "CARRO"
    ADD CONSTRAINT "CARRO_MODELOID_fkey" FOREIGN KEY ("MODELOID") REFERENCES "MODELO"("ID");


--
-- TOC entry 1981 (class 2606 OID 49270)
-- Name: CARRO_PARCELASID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "CARRO"
    ADD CONSTRAINT "CARRO_PARCELASID_fkey" FOREIGN KEY ("PARCELASID") REFERENCES "PARCELAS"("ID");


--
-- TOC entry 1982 (class 2606 OID 49275)
-- Name: CARRO_USERID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "CARRO"
    ADD CONSTRAINT "CARRO_USERID_fkey" FOREIGN KEY ("USERID") REFERENCES "USER"("ID");


--
-- TOC entry 1984 (class 2606 OID 49292)
-- Name: LOG_USERID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "LOG"
    ADD CONSTRAINT "LOG_USERID_fkey" FOREIGN KEY ("USERID") REFERENCES "USER"("ID");


--
-- TOC entry 1983 (class 2606 OID 49260)
-- Name: MARCA_USERID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "MARCA"
    ADD CONSTRAINT "MARCA_USERID_fkey" FOREIGN KEY ("USERID") REFERENCES "USER"("ID");


--
-- TOC entry 1985 (class 2606 OID 49312)
-- Name: USER_PAPELID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "USER"
    ADD CONSTRAINT "USER_PAPELID_fkey" FOREIGN KEY ("PAPELID") REFERENCES "PAPEIS"("ID");


--
-- TOC entry 2006 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2014-01-14 00:48:47

--
-- PostgreSQL database dump complete
--

