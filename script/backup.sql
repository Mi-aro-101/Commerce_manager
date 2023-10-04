--
-- PostgreSQL database dump
--

-- Dumped from database version 15.4 (Debian 15.4-3)
-- Dumped by pg_dump version 15.4 (Debian 15.4-3)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: notify_messenger_messages(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.notify_messenger_messages() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
            BEGIN
                PERFORM pg_notify('messenger_messages', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$;


ALTER FUNCTION public.notify_messenger_messages() OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: adresse; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.adresse (
    id_adresse integer NOT NULL,
    des_adresse character varying(40) NOT NULL,
    niv_adresse integer NOT NULL
);


ALTER TABLE public.adresse OWNER TO liantsiky;

--
-- Name: adresse_id_adresse_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.adresse_id_adresse_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.adresse_id_adresse_seq OWNER TO liantsiky;

--
-- Name: diplome; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.diplome (
    id_diplome integer NOT NULL,
    des_diplome character varying(30) NOT NULL,
    niv_diplome integer NOT NULL
);


ALTER TABLE public.diplome OWNER TO postgres;

--
-- Name: diplome_id_diplome_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.diplome_id_diplome_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.diplome_id_diplome_seq OWNER TO postgres;

--
-- Name: doctrine_migration_versions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.doctrine_migration_versions (
    version character varying(191) NOT NULL,
    executed_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    execution_time integer
);


ALTER TABLE public.doctrine_migration_versions OWNER TO postgres;

--
-- Name: domaine; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.domaine (
    id_domaine integer NOT NULL,
    des_domaine character varying(30) NOT NULL
);


ALTER TABLE public.domaine OWNER TO liantsiky;

--
-- Name: domaine_id_domaine_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.domaine_id_domaine_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.domaine_id_domaine_seq OWNER TO liantsiky;

--
-- Name: experience; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.experience (
    id_xp integer NOT NULL,
    des_xp character varying(30) NOT NULL,
    niv_xp integer NOT NULL
);


ALTER TABLE public.experience OWNER TO liantsiky;

--
-- Name: experience_id_xp_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.experience_id_xp_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.experience_id_xp_seq OWNER TO liantsiky;

--
-- Name: matrimoniale; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.matrimoniale (
    id_matrimoniale integer NOT NULL,
    des_matrimoniale character varying(20) NOT NULL
);


ALTER TABLE public.matrimoniale OWNER TO liantsiky;

--
-- Name: matrimoniale_id_matrimoniale_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.matrimoniale_id_matrimoniale_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.matrimoniale_id_matrimoniale_seq OWNER TO liantsiky;

--
-- Name: messenger_messages; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.messenger_messages (
    id bigint NOT NULL,
    body text NOT NULL,
    headers text NOT NULL,
    queue_name character varying(190) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    available_at timestamp(0) without time zone NOT NULL,
    delivered_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);


ALTER TABLE public.messenger_messages OWNER TO postgres;

--
-- Name: COLUMN messenger_messages.created_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.messenger_messages.created_at IS '(DC2Type:datetime_immutable)';


--
-- Name: COLUMN messenger_messages.available_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.messenger_messages.available_at IS '(DC2Type:datetime_immutable)';


--
-- Name: COLUMN messenger_messages.delivered_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.messenger_messages.delivered_at IS '(DC2Type:datetime_immutable)';


--
-- Name: messenger_messages_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.messenger_messages_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.messenger_messages_id_seq OWNER TO postgres;

--
-- Name: messenger_messages_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.messenger_messages_id_seq OWNED BY public.messenger_messages.id;


--
-- Name: nationalite; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.nationalite (
    id integer NOT NULL,
    des_nationalite character varying(20) NOT NULL
);


ALTER TABLE public.nationalite OWNER TO liantsiky;

--
-- Name: nationalite_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.nationalite_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.nationalite_id_seq OWNER TO liantsiky;

--
-- Name: service; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.service (
    id_service integer NOT NULL,
    des_service character varying(50) NOT NULL
);


ALTER TABLE public.service OWNER TO postgres;

--
-- Name: service_id_service_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.service_id_service_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.service_id_service_seq OWNER TO postgres;

--
-- Name: sexe; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.sexe (
    id integer NOT NULL,
    des_sexe character varying(10) NOT NULL
);


ALTER TABLE public.sexe OWNER TO liantsiky;

--
-- Name: sexe_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.sexe_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sexe_id_seq OWNER TO liantsiky;

--
-- Name: utilisateur; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.utilisateur (
    id_utilisateur integer NOT NULL,
    mail character varying(180) NOT NULL,
    roles json NOT NULL,
    mot_de_passe character varying(255) NOT NULL,
    nom_utilisateur character varying(30) NOT NULL,
    prenom_utilisateur character varying(30) NOT NULL,
    date_de_naissance date NOT NULL
);


ALTER TABLE public.utilisateur OWNER TO postgres;

--
-- Name: utilisateur_id_utilisateur_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.utilisateur_id_utilisateur_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.utilisateur_id_utilisateur_seq OWNER TO postgres;

--
-- Name: messenger_messages id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages ALTER COLUMN id SET DEFAULT nextval('public.messenger_messages_id_seq'::regclass);


--
-- Data for Name: adresse; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.adresse (id_adresse, des_adresse, niv_adresse) FROM stdin;
2	Entre 10 et 15 km	4
3	Entre 5 et 10 km	7
4	Moins de 5 km	10
1	Plus de 15km	2
\.


--
-- Data for Name: diplome; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.diplome (id_diplome, des_diplome, niv_diplome) FROM stdin;
1	BEPC	2
2	BACC	3
3	Licence	5
4	Master	7
5	Doctorat	10
\.


--
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
DoctrineMigrations\\Version20231001163159	2023-10-01 16:33:45	31
DoctrineMigrations\\Version20231001185914	2023-10-01 18:59:29	31
DoctrineMigrations\\Version20231001190317	2023-10-01 19:04:27	5
DoctrineMigrations\\Version20231001191142	2023-10-01 19:11:59	17
DoctrineMigrations\\Version20231001192755	2023-10-01 19:31:25	17
DoctrineMigrations\\Version20231001193008	2023-10-01 19:35:46	18
DoctrineMigrations\\Version20231001193542	2023-10-01 20:25:57	23
DoctrineMigrations\\Version20231002081430	2023-10-02 08:14:39	11
DoctrineMigrations\\Version20231004020912	2023-10-04 02:09:44	24
DoctrineMigrations\\Version20231004120607	2023-10-04 12:06:36	56
DoctrineMigrations\\Version20231004125850	2023-10-04 12:59:15	47
DoctrineMigrations\\Version20231004131343	2023-10-04 13:13:57	7
\.


--
-- Data for Name: domaine; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.domaine (id_domaine, des_domaine) FROM stdin;
1	Securite-gardiennage
2	Informatique-reseautage
3	Informatique-web
\.


--
-- Data for Name: experience; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.experience (id_xp, des_xp, niv_xp) FROM stdin;
1	moins de 3ans	2
2	3 à  5 ans	5
3	5 ans  et plus	10
\.


--
-- Data for Name: matrimoniale; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.matrimoniale (id_matrimoniale, des_matrimoniale) FROM stdin;
1	Celibataire
2	Marié(e)
3	Divorcé(e)
4	Veuf(ve)
5	Concubin(e)
6	Séparé(e)
\.


--
-- Data for Name: messenger_messages; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) FROM stdin;
\.


--
-- Data for Name: nationalite; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.nationalite (id, des_nationalite) FROM stdin;
\.


--
-- Data for Name: service; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.service (id_service, des_service) FROM stdin;
1	Securite
2	Informatique
\.


--
-- Data for Name: sexe; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.sexe (id, des_sexe) FROM stdin;
1	Feminin
2	Masculin
\.


--
-- Data for Name: utilisateur; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.utilisateur (id_utilisateur, mail, roles, mot_de_passe, nom_utilisateur, prenom_utilisateur, date_de_naissance) FROM stdin;
1	fitia@gmail.com	[]	$2y$13$nNhuE6kDUakyiNuFYLFmL.PnyzdbN227NXesGacetdh78SY4tVKSe	RAKOTO	Fitia	2018-01-01
\.


--
-- Name: adresse_id_adresse_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.adresse_id_adresse_seq', 4, true);


--
-- Name: diplome_id_diplome_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.diplome_id_diplome_seq', 5, true);


--
-- Name: domaine_id_domaine_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.domaine_id_domaine_seq', 3, true);


--
-- Name: experience_id_xp_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.experience_id_xp_seq', 3, true);


--
-- Name: matrimoniale_id_matrimoniale_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.matrimoniale_id_matrimoniale_seq', 6, true);


--
-- Name: messenger_messages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.messenger_messages_id_seq', 1, false);


--
-- Name: nationalite_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.nationalite_id_seq', 1, false);


--
-- Name: service_id_service_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.service_id_service_seq', 2, true);


--
-- Name: sexe_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.sexe_id_seq', 2, true);


--
-- Name: utilisateur_id_utilisateur_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.utilisateur_id_utilisateur_seq', 1, true);


--
-- Name: adresse adresse_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.adresse
    ADD CONSTRAINT adresse_pkey PRIMARY KEY (id_adresse);


--
-- Name: diplome diplome_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.diplome
    ADD CONSTRAINT diplome_pkey PRIMARY KEY (id_diplome);


--
-- Name: doctrine_migration_versions doctrine_migration_versions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);


--
-- Name: domaine domaine_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.domaine
    ADD CONSTRAINT domaine_pkey PRIMARY KEY (id_domaine);


--
-- Name: experience experience_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.experience
    ADD CONSTRAINT experience_pkey PRIMARY KEY (id_xp);


--
-- Name: matrimoniale matrimoniale_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.matrimoniale
    ADD CONSTRAINT matrimoniale_pkey PRIMARY KEY (id_matrimoniale);


--
-- Name: messenger_messages messenger_messages_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages
    ADD CONSTRAINT messenger_messages_pkey PRIMARY KEY (id);


--
-- Name: nationalite nationalite_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.nationalite
    ADD CONSTRAINT nationalite_pkey PRIMARY KEY (id);


--
-- Name: service service_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.service
    ADD CONSTRAINT service_pkey PRIMARY KEY (id_service);


--
-- Name: sexe sexe_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.sexe
    ADD CONSTRAINT sexe_pkey PRIMARY KEY (id);


--
-- Name: utilisateur utilisateur_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.utilisateur
    ADD CONSTRAINT utilisateur_pkey PRIMARY KEY (id_utilisateur);


--
-- Name: idx_75ea56e016ba31db; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e016ba31db ON public.messenger_messages USING btree (delivered_at);


--
-- Name: idx_75ea56e0e3bd61ce; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0e3bd61ce ON public.messenger_messages USING btree (available_at);


--
-- Name: idx_75ea56e0fb7336f0; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0fb7336f0 ON public.messenger_messages USING btree (queue_name);


--
-- Name: uniq_1d1c63b35126ac48; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_1d1c63b35126ac48 ON public.utilisateur USING btree (mail);


--
-- Name: messenger_messages notify_trigger; Type: TRIGGER; Schema: public; Owner: postgres
--

CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON public.messenger_messages FOR EACH ROW EXECUTE FUNCTION public.notify_messenger_messages();


--
-- PostgreSQL database dump complete
--

