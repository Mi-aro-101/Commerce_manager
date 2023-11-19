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
    id integer NOT NULL,
    des_adresse character varying(40) NOT NULL,
    niv_adresse integer NOT NULL
);


ALTER TABLE public.adresse OWNER TO liantsiky;

--
-- Name: adresse_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.adresse_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.adresse_id_seq OWNER TO liantsiky;

--
-- Name: article; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.article (
    id integer NOT NULL,
    des_article character varying(100) NOT NULL
);


ALTER TABLE public.article OWNER TO liantsiky;

--
-- Name: article_fournisseur; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.article_fournisseur (
    id integer NOT NULL,
    article_id integer NOT NULL,
    fournisseur_id integer NOT NULL,
    prix_actuel numeric(10,0) NOT NULL
);


ALTER TABLE public.article_fournisseur OWNER TO liantsiky;

--
-- Name: article_fournisseur_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.article_fournisseur_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.article_fournisseur_id_seq OWNER TO liantsiky;

--
-- Name: article_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.article_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.article_id_seq OWNER TO liantsiky;

--
-- Name: conge; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.conge (
    id integer NOT NULL,
    employe_id integer,
    date_debut timestamp(0) without time zone NOT NULL,
    date_fin timestamp(0) without time zone NOT NULL,
    statut integer NOT NULL
);


ALTER TABLE public.conge OWNER TO liantsiky;

--
-- Name: conge_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.conge_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.conge_id_seq OWNER TO liantsiky;

--
-- Name: cv_candidat_note; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.cv_candidat_note (
    id integer NOT NULL,
    note double precision NOT NULL,
    cvrequirements_id integer NOT NULL,
    utilisateur_id integer
);


ALTER TABLE public.cv_candidat_note OWNER TO liantsiky;

--
-- Name: cv_candidat_note_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.cv_candidat_note_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cv_candidat_note_id_seq OWNER TO liantsiky;

--
-- Name: cvcandidat; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.cvcandidat (
    id integer NOT NULL,
    cvrequirements_id integer NOT NULL,
    utilisateur_id integer NOT NULL,
    domaine_id integer NOT NULL,
    diplome_id integer NOT NULL,
    experience_id integer NOT NULL,
    sexe_id integer NOT NULL,
    nationalite_id integer NOT NULL,
    adresse_id integer NOT NULL,
    matrimoniale_id integer NOT NULL,
    date_depot date NOT NULL,
    date_reponse date,
    statue integer NOT NULL
);


ALTER TABLE public.cvcandidat OWNER TO liantsiky;

--
-- Name: cvcandidat_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.cvcandidat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cvcandidat_id_seq OWNER TO liantsiky;

--
-- Name: cvrequirements; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.cvrequirements (
    id integer NOT NULL,
    service_id integer NOT NULL,
    domaine_id integer NOT NULL,
    diplome_id integer NOT NULL,
    experience_id integer NOT NULL,
    sexe_id integer NOT NULL,
    nationalite_id integer NOT NULL,
    adresse_id integer NOT NULL,
    matrimoniale_id integer NOT NULL,
    date_envoie date NOT NULL,
    poste_description character varying(50) NOT NULL,
    coef_diplome integer NOT NULL,
    coef_xp integer NOT NULL,
    coef_adresse integer NOT NULL,
    coef_sexe integer NOT NULL,
    coef_nationalite integer NOT NULL,
    coef_matrimoniale integer NOT NULL,
    date_fin date NOT NULL
);


ALTER TABLE public.cvrequirements OWNER TO liantsiky;

--
-- Name: cvrequirements_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.cvrequirements_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cvrequirements_id_seq OWNER TO liantsiky;

--
-- Name: diplome; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.diplome (
    id integer NOT NULL,
    des_diplome character varying(30) NOT NULL,
    niv_diplome integer NOT NULL
);


ALTER TABLE public.diplome OWNER TO postgres;

--
-- Name: diplome_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.diplome_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.diplome_id_seq OWNER TO liantsiky;

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
    id integer NOT NULL,
    des_domaine character varying(30) NOT NULL
);


ALTER TABLE public.domaine OWNER TO liantsiky;

--
-- Name: domaine_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.domaine_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.domaine_id_seq OWNER TO liantsiky;

--
-- Name: employe; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.employe (
    id integer NOT NULL,
    utilisateur_id integer NOT NULL,
    superieur_id integer,
    date_embauche date NOT NULL,
    cnaps boolean NOT NULL,
    osti boolean NOT NULL,
    salaire numeric(10,2) NOT NULL,
    service_id integer NOT NULL,
    statut integer NOT NULL,
    poste character varying(100) NOT NULL
);


ALTER TABLE public.employe OWNER TO liantsiky;

--
-- Name: employe_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.employe_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.employe_id_seq OWNER TO liantsiky;

--
-- Name: experience; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.experience (
    id integer NOT NULL,
    des_xp character varying(30) NOT NULL,
    niv_xp integer NOT NULL
);


ALTER TABLE public.experience OWNER TO liantsiky;

--
-- Name: experience_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.experience_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.experience_id_seq OWNER TO liantsiky;

--
-- Name: fournisseur; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.fournisseur (
    id integer NOT NULL,
    mode_paiment_id integer NOT NULL,
    des_fournisseur character varying(50) NOT NULL
);


ALTER TABLE public.fournisseur OWNER TO liantsiky;

--
-- Name: fournisseur_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.fournisseur_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.fournisseur_id_seq OWNER TO liantsiky;

--
-- Name: heure_suplementaire; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.heure_suplementaire (
    id integer NOT NULL,
    employe_id integer NOT NULL,
    date date NOT NULL,
    duree time(0) without time zone NOT NULL,
    statut integer NOT NULL
);


ALTER TABLE public.heure_suplementaire OWNER TO liantsiky;

--
-- Name: heure_suplementaire_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.heure_suplementaire_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.heure_suplementaire_id_seq OWNER TO liantsiky;

--
-- Name: historique_salaire; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.historique_salaire (
    id integer NOT NULL,
    date_changement date NOT NULL,
    montant numeric(10,2) NOT NULL
);


ALTER TABLE public.historique_salaire OWNER TO liantsiky;

--
-- Name: historique_salaire_employe; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.historique_salaire_employe (
    historique_salaire_id integer NOT NULL,
    employe_id integer NOT NULL
);


ALTER TABLE public.historique_salaire_employe OWNER TO liantsiky;

--
-- Name: historique_salaire_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.historique_salaire_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.historique_salaire_id_seq OWNER TO liantsiky;

--
-- Name: matrimoniale; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.matrimoniale (
    id integer NOT NULL,
    des_matrimoniale character varying(20) NOT NULL
);


ALTER TABLE public.matrimoniale OWNER TO liantsiky;

--
-- Name: matrimoniale_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.matrimoniale_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.matrimoniale_id_seq OWNER TO liantsiky;

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
-- Name: mode_paiment; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.mode_paiment (
    id integer NOT NULL,
    des_modepaiment character varying(100) NOT NULL
);


ALTER TABLE public.mode_paiment OWNER TO liantsiky;

--
-- Name: mode_paiment_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.mode_paiment_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mode_paiment_id_seq OWNER TO liantsiky;

--
-- Name: nationalite; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.nationalite (
    id integer NOT NULL,
    des_nationalite character varying(50) NOT NULL,
    code_nationalite character varying(2)
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
-- Name: reponse_section; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.reponse_section (
    id integer NOT NULL,
    section_id integer NOT NULL,
    des_reponse character varying(200) NOT NULL,
    is_true boolean NOT NULL
);


ALTER TABLE public.reponse_section OWNER TO liantsiky;

--
-- Name: reponse_section_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.reponse_section_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.reponse_section_id_seq OWNER TO liantsiky;

--
-- Name: section; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.section (
    id integer NOT NULL,
    test_aptitude_id integer NOT NULL,
    des_question character varying(200) NOT NULL,
    coef_section integer NOT NULL
);


ALTER TABLE public.section OWNER TO liantsiky;

--
-- Name: section_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.section_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.section_id_seq OWNER TO liantsiky;

--
-- Name: section_reponse; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.section_reponse (
    id integer NOT NULL,
    reponse_id integer NOT NULL,
    test_resultat_id integer NOT NULL
);


ALTER TABLE public.section_reponse OWNER TO liantsiky;

--
-- Name: section_reponse_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.section_reponse_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.section_reponse_id_seq OWNER TO liantsiky;

--
-- Name: service; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.service (
    id integer NOT NULL,
    des_service character varying(50) NOT NULL
);


ALTER TABLE public.service OWNER TO postgres;

--
-- Name: service_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.service_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.service_id_seq OWNER TO liantsiky;

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
-- Name: test_aptitude; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.test_aptitude (
    id integer NOT NULL,
    cv_requirements_id integer NOT NULL
);


ALTER TABLE public.test_aptitude OWNER TO liantsiky;

--
-- Name: test_aptitude_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.test_aptitude_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.test_aptitude_id_seq OWNER TO liantsiky;

--
-- Name: test_candidat_note; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.test_candidat_note (
    id integer NOT NULL,
    test_resultat_id integer NOT NULL,
    note integer NOT NULL
);


ALTER TABLE public.test_candidat_note OWNER TO liantsiky;

--
-- Name: test_candidat_note_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.test_candidat_note_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.test_candidat_note_id_seq OWNER TO liantsiky;

--
-- Name: test_resultat; Type: TABLE; Schema: public; Owner: liantsiky
--

CREATE TABLE public.test_resultat (
    id integer NOT NULL,
    utilisateur_id integer NOT NULL,
    test_aptitude_id integer NOT NULL,
    date_envoie date NOT NULL,
    date_reponse date,
    statut integer NOT NULL
);


ALTER TABLE public.test_resultat OWNER TO liantsiky;

--
-- Name: test_resultat_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.test_resultat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.test_resultat_id_seq OWNER TO liantsiky;

--
-- Name: utilisateur; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.utilisateur (
    id integer NOT NULL,
    mail character varying(180) NOT NULL,
    roles json NOT NULL,
    mot_de_passe character varying(255) NOT NULL,
    nom_utilisateur character varying(30) NOT NULL,
    prenom_utilisateur character varying(30) NOT NULL,
    date_de_naissance date NOT NULL,
    cv_candidat_note_id integer
);


ALTER TABLE public.utilisateur OWNER TO postgres;

--
-- Name: utilisateur_id_seq; Type: SEQUENCE; Schema: public; Owner: liantsiky
--

CREATE SEQUENCE public.utilisateur_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.utilisateur_id_seq OWNER TO liantsiky;

--
-- Name: messenger_messages id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages ALTER COLUMN id SET DEFAULT nextval('public.messenger_messages_id_seq'::regclass);


--
-- Data for Name: adresse; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.adresse (id, des_adresse, niv_adresse) FROM stdin;
2	Entre 10 et 15 km	4
3	Entre 5 et 10 km	7
4	Moins de 5 km	10
1	Plus de 15km	2
\.


--
-- Data for Name: article; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.article (id, des_article) FROM stdin;
1	Stylo bleu
2	Cache-bouche
\.


--
-- Data for Name: article_fournisseur; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.article_fournisseur (id, article_id, fournisseur_id, prix_actuel) FROM stdin;
1	1	1	700
5	2	1	300
\.


--
-- Data for Name: conge; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.conge (id, employe_id, date_debut, date_fin, statut) FROM stdin;
12	9	2024-05-04 06:00:00	2024-05-07 06:00:00	7
\.


--
-- Data for Name: cv_candidat_note; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.cv_candidat_note (id, note, cvrequirements_id, utilisateur_id) FROM stdin;
15	91	2	2
16	99	5	3
\.


--
-- Data for Name: cvcandidat; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.cvcandidat (id, cvrequirements_id, utilisateur_id, domaine_id, diplome_id, experience_id, sexe_id, nationalite_id, adresse_id, matrimoniale_id, date_depot, date_reponse, statue) FROM stdin;
15	2	2	1	2	2	2	134	4	2	2018-01-04	2023-11-01	10
16	5	3	1	3	3	1	18	4	1	2018-01-20	2023-11-01	10
\.


--
-- Data for Name: cvrequirements; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.cvrequirements (id, service_id, domaine_id, diplome_id, experience_id, sexe_id, nationalite_id, adresse_id, matrimoniale_id, date_envoie, poste_description, coef_diplome, coef_xp, coef_adresse, coef_sexe, coef_nationalite, coef_matrimoniale, date_fin) FROM stdin;
1	2	2	3	1	1	134	4	2	2018-01-01	Brancheur d'imprimante	5	1	5	1	4	5	2018-01-31
2	1	1	1	1	2	134	4	1	2018-01-01	Securiteretaire	2	3	5	5	4	2	2018-01-31
4	1	1	1	1	1	1	2	1	2018-01-01	Tay makaleo be	2	2	5	4	4	5	2018-01-31
5	1	1	1	1	1	134	2	1	2018-01-01	Securite de l'amour	4	2	5	1	5	1	2018-03-30
\.


--
-- Data for Name: diplome; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.diplome (id, des_diplome, niv_diplome) FROM stdin;
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
DoctrineMigrations\\Version20231009061646	2023-10-09 06:17:52	194
DoctrineMigrations\\Version20231011083254	2023-10-11 08:33:10	5
DoctrineMigrations\\Version20231011095712	2023-10-11 09:57:26	9
DoctrineMigrations\\Version20231011095842	2023-10-11 09:58:57	1
DoctrineMigrations\\Version20231011100012	2023-10-11 10:00:16	9
DoctrineMigrations\\Version20231018063630	2023-10-18 06:40:22	64
DoctrineMigrations\\Version20231021104350	2023-10-21 10:44:05	38
DoctrineMigrations\\Version20231021104738	2023-10-21 10:47:46	3
DoctrineMigrations\\Version20231021105013	2023-10-21 10:52:00	21
DoctrineMigrations\\Version20231031060103	2023-10-31 06:01:07	44
DoctrineMigrations\\Version20231031061722	2023-10-31 06:17:25	13
DoctrineMigrations\\Version20231031154125	2023-10-31 15:41:29	22
DoctrineMigrations\\Version20231101062704	2023-11-01 06:27:09	31
DoctrineMigrations\\Version20231101063113	2023-11-01 06:31:18	8
DoctrineMigrations\\Version20231104060751	2023-11-04 06:08:13	96
DoctrineMigrations\\Version20231104064757	2023-11-04 06:49:25	65
DoctrineMigrations\\Version20231105113118	2023-11-05 11:31:26	36
DoctrineMigrations\\Version20231106042357	2023-11-06 04:24:29	26
DoctrineMigrations\\Version20231118170846	2023-11-18 17:09:03	6
DoctrineMigrations\\Version20231118175829	2023-11-18 17:58:41	28
DoctrineMigrations\\Version20231118181449	2023-11-18 18:15:00	11
DoctrineMigrations\\Version20231118182530	2023-11-18 18:25:43	25
DoctrineMigrations\\Version20231118184236	2023-11-18 18:43:05	25
\.


--
-- Data for Name: domaine; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.domaine (id, des_domaine) FROM stdin;
1	Securite-gardiennage
2	Informatique-reseautage
3	Informatique-web
\.


--
-- Data for Name: employe; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.employe (id, utilisateur_id, superieur_id, date_embauche, cnaps, osti, salaire, service_id, statut, poste) FROM stdin;
9	2	\N	2023-01-04	f	f	2000000.00	2	5	Concepteur
\.


--
-- Data for Name: experience; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.experience (id, des_xp, niv_xp) FROM stdin;
1	moins de 3ans	2
2	3 à  5 ans	5
3	5 ans  et plus	10
\.


--
-- Data for Name: fournisseur; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.fournisseur (id, mode_paiment_id, des_fournisseur) FROM stdin;
1	1	Amazon
2	2	Jumbo
\.


--
-- Data for Name: heure_suplementaire; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.heure_suplementaire (id, employe_id, date, duree, statut) FROM stdin;
\.


--
-- Data for Name: historique_salaire; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.historique_salaire (id, date_changement, montant) FROM stdin;
\.


--
-- Data for Name: historique_salaire_employe; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.historique_salaire_employe (historique_salaire_id, employe_id) FROM stdin;
\.


--
-- Data for Name: matrimoniale; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.matrimoniale (id, des_matrimoniale) FROM stdin;
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
-- Data for Name: mode_paiment; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.mode_paiment (id, des_modepaiment) FROM stdin;
1	Paypal
2	Cash
\.


--
-- Data for Name: nationalite; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.nationalite (id, des_nationalite, code_nationalite) FROM stdin;
1	Afghanistan	AF
2	Aland Islands	AX
3	Albania	AL
4	Algeria	DZ
5	American Samoa	AS
6	Andorra	AD
7	Angola	AO
8	Anguilla	AI
9	Antarctica	AQ
10	Antigua and Barbuda	AG
11	Argentina	AR
12	Armenia	AM
13	Aruba	AW
14	Australia	AU
15	Austria	AT
16	Azerbaijan	AZ
17	Bahamas	BS
18	Bahrain	BH
19	Bangladesh	BD
20	Barbados	BB
21	Belarus	BY
22	Belgium	BE
23	Belize	BZ
24	Benin	BJ
25	Bermuda	BM
26	Bhutan	BT
27	Bolivia	BO
28	Bonaire, Sint Eustatius and Saba	BQ
29	Bosnia and Herzegovina	BA
30	Botswana	BW
31	Bouvet Island	BV
32	Brazil	BR
33	British Indian Ocean Territory	IO
34	Brunei Darussalam	BN
35	Bulgaria	BG
36	Burkina Faso	BF
37	Burundi	BI
38	Cambodia	KH
39	Cameroon	CM
40	Canada	CA
41	Cape Verde	CV
42	Cayman Islands	KY
43	Central African Republic	CF
44	Chad	TD
45	Chile	CL
46	China	CN
47	Christmas Island	CX
48	Cocos (Keeling) Islands	CC
49	Colombia	CO
50	Comoros	KM
51	Congo	CG
52	Congo, Democratic Republic of the Congo	CD
53	Cook Islands	CK
54	Costa Rica	CR
55	Cote D'Ivoire	CI
56	Croatia	HR
57	Cuba	CU
58	Curacao	CW
59	Cyprus	CY
60	Czech Republic	CZ
61	Denmark	DK
62	Djibouti	DJ
63	Dominica	DM
64	Dominican Republic	DO
65	Ecuador	EC
66	Egypt	EG
67	El Salvador	SV
68	Equatorial Guinea	GQ
69	Eritrea	ER
70	Estonia	EE
71	Ethiopia	ET
72	Falkland Islands (Malvinas)	FK
73	Faroe Islands	FO
74	Fiji	FJ
75	Finland	FI
76	France	FR
77	French Guiana	GF
78	French Polynesia	PF
79	French Southern Territories	TF
80	Gabon	GA
81	Gambia	GM
82	Georgia	GE
83	Germany	DE
84	Ghana	GH
85	Gibraltar	GI
86	Greece	GR
87	Greenland	GL
88	Grenada	GD
89	Guadeloupe	GP
90	Guam	GU
91	Guatemala	GT
92	Guernsey	GG
93	Guinea	GN
94	Guinea-Bissau	GW
95	Guyana	GY
96	Haiti	HT
97	Heard Island and Mcdonald Islands	HM
98	Holy See (Vatican City State)	VA
99	Honduras	HN
100	Hong Kong	HK
101	Hungary	HU
102	Iceland	IS
103	India	IN
104	Indonesia	ID
105	Iran, Islamic Republic of	IR
106	Iraq	IQ
107	Ireland	IE
108	Isle of Man	IM
109	Israel	IL
110	Italy	IT
111	Jamaica	JM
112	Japan	JP
113	Jersey	JE
114	Jordan	JO
115	Kazakhstan	KZ
116	Kenya	KE
117	Kiribati	KI
118	Korea, Democratic People's Republic of	KP
119	Korea, Republic of	KR
120	Kosovo	XK
121	Kuwait	KW
122	Kyrgyzstan	KG
123	Lao People's Democratic Republic	LA
124	Latvia	LV
125	Lebanon	LB
126	Lesotho	LS
127	Liberia	LR
128	Libyan Arab Jamahiriya	LY
129	Liechtenstein	LI
130	Lithuania	LT
131	Luxembourg	LU
132	Macao	MO
133	Macedonia, the Former Yugoslav Republic of	MK
134	Madagascar	MG
135	Malawi	MW
136	Malaysia	MY
137	Maldives	MV
138	Mali	ML
139	Malta	MT
140	Marshall Islands	MH
141	Martinique	MQ
142	Mauritania	MR
143	Mauritius	MU
144	Mayotte	YT
145	Mexico	MX
146	Micronesia, Federated States of	FM
147	Moldova, Republic of	MD
148	Monaco	MC
149	Mongolia	MN
150	Montenegro	ME
151	Montserrat	MS
152	Morocco	MA
153	Mozambique	MZ
154	Myanmar	MM
155	Namibia	NA
156	Nauru	NR
157	Nepal	NP
158	Netherlands	NL
159	Netherlands Antilles	AN
160	New Caledonia	NC
161	New Zealand	NZ
162	Nicaragua	NI
163	Niger	NE
164	Nigeria	NG
165	Niue	NU
166	Norfolk Island	NF
167	Northern Mariana Islands	MP
168	Norway	NO
169	Oman	OM
170	Pakistan	PK
171	Palau	PW
172	Palestinian Territory, Occupied	PS
173	Panama	PA
174	Papua New Guinea	PG
175	Paraguay	PY
176	Peru	PE
177	Philippines	PH
178	Pitcairn	PN
179	Poland	PL
180	Portugal	PT
181	Puerto Rico	PR
182	Qatar	QA
183	Reunion	RE
184	Romania	RO
185	Russian Federation	RU
186	Rwanda	RW
187	Saint Barthelemy	BL
188	Saint Helena	SH
189	Saint Kitts and Nevis	KN
190	Saint Lucia	LC
191	Saint Martin	MF
192	Saint Pierre and Miquelon	PM
193	Saint Vincent and the Grenadines	VC
194	Samoa	WS
195	San Marino	SM
196	Sao Tome and Principe	ST
197	Saudi Arabia	SA
198	Senegal	SN
199	Serbia	RS
200	Serbia and Montenegro	CS
201	Seychelles	SC
202	Sierra Leone	SL
203	Singapore	SG
204	Sint Maarten	SX
205	Slovakia	SK
206	Slovenia	SI
207	Solomon Islands	SB
208	Somalia	SO
209	South Africa	ZA
210	South Georgia and the South Sandwich Islands	GS
211	South Sudan	SS
212	Spain	ES
213	Sri Lanka	LK
214	Sudan	SD
215	Suriname	SR
216	Svalbard and Jan Mayen	SJ
217	Swaziland	SZ
218	Sweden	SE
219	Switzerland	CH
220	Syrian Arab Republic	SY
221	Taiwan, Province of China	TW
222	Tajikistan	TJ
223	Tanzania, United Republic of	TZ
224	Thailand	TH
225	Timor-Leste	TL
226	Togo	TG
227	Tokelau	TK
228	Tonga	TO
229	Trinidad and Tobago	TT
230	Tunisia	TN
231	Turkey	TR
232	Turkmenistan	TM
233	Turks and Caicos Islands	TC
234	Tuvalu	TV
235	Uganda	UG
236	Ukraine	UA
237	United Arab Emirates	AE
238	United Kingdom	GB
239	United States	US
240	United States Minor Outlying Islands	UM
241	Uruguay	UY
242	Uzbekistan	UZ
243	Vanuatu	VU
244	Venezuela	VE
245	Viet Nam	VN
246	Virgin Islands, British	VG
247	Virgin Islands, U.s.	VI
248	Wallis and Futuna	WF
249	Western Sahara	EH
250	Yemen	YE
251	Zambia	ZM
252	Zimbabwe	ZW
\.


--
-- Data for Name: reponse_section; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.reponse_section (id, section_id, des_reponse, is_true) FROM stdin;
29	17	Eny	t
30	17	Tsia	f
31	18	Eny	t
32	18	Tsia	f
33	19	Eny	t
34	19	angamba	f
35	19	angamba eny	f
36	19	Tsia	f
\.


--
-- Data for Name: section; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.section (id, test_aptitude_id, des_question, coef_section) FROM stdin;
17	28	Tiako ve i Madagasikara ?	4
18	29	Test aptitude faharoa ve ity ?	4
19	29	Fahatelo ve ity ?	1
\.


--
-- Data for Name: section_reponse; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.section_reponse (id, reponse_id, test_resultat_id) FROM stdin;
30	31	30
31	34	30
\.


--
-- Data for Name: service; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.service (id, des_service) FROM stdin;
1	Securite
2	Informatique
3	Achat
\.


--
-- Data for Name: sexe; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.sexe (id, des_sexe) FROM stdin;
1	Feminin
2	Masculin
\.


--
-- Data for Name: test_aptitude; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.test_aptitude (id, cv_requirements_id) FROM stdin;
28	2
29	5
\.


--
-- Data for Name: test_candidat_note; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.test_candidat_note (id, test_resultat_id, note) FROM stdin;
17	30	9
\.


--
-- Data for Name: test_resultat; Type: TABLE DATA; Schema: public; Owner: liantsiky
--

COPY public.test_resultat (id, utilisateur_id, test_aptitude_id, date_envoie, date_reponse, statut) FROM stdin;
30	3	29	2018-01-31	\N	5
\.


--
-- Data for Name: utilisateur; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.utilisateur (id, mail, roles, mot_de_passe, nom_utilisateur, prenom_utilisateur, date_de_naissance, cv_candidat_note_id) FROM stdin;
1	fitia@gmail.com	["ROLE_ADMIN"]	$2y$13$nNhuE6kDUakyiNuFYLFmL.PnyzdbN227NXesGacetdh78SY4tVKSe	RAKOTO	Fitia	2018-01-01	\N
2	rakoto@gmail.com	[]	$2y$13$lTCA7PqcRU/MqNmwfpaHw.99VyOKQjllaoW75PpXzeAjpWcDlu3u.	Rakoto	Frah	1950-01-01	\N
3	marie@gmail.com	[]	$2y$13$WM5i03/cogDxdS3cGjcIKec5Wk2aLKxj5PnmtXA3fKKtGQGQqY8uK	Madeleine	Marie	1999-06-17	\N
4	achat@gmail.com	["ROLE_ACHAT"]	$2y$13$4JaicjCEPIJeYrQxUUGRFe2Jzt6mxCrtvwJvAf/eqku/kMHoz8yye	RAKOTOVAO	Marianne	1960-01-01	\N
6	securite@gmail.com	["ROLE_ADMIN_DEPARTEMENT"] 	$2y$13$CrfHVASpAHfXaLkEPPm9OuTNZuugO6FZdX0r4QDWVYNpLpdLwylYy	MAHALIKA	Andry	2000-08-11	\N
5	informatique@gmail.com	["ROLE_ADMIN_DEPARTEMENT"] 	$2y$13$QMmmmvDh5rPQCGonEKNkcOyHp2AWgu3h86rOf.GpLh1G7/u6XqDo6	JEAN	DeDieu	1980-06-17	\N
\.


--
-- Name: adresse_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.adresse_id_seq', 1, false);


--
-- Name: article_fournisseur_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.article_fournisseur_id_seq', 5, true);


--
-- Name: article_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.article_id_seq', 3, true);


--
-- Name: conge_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.conge_id_seq', 12, true);


--
-- Name: cv_candidat_note_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.cv_candidat_note_id_seq', 16, true);


--
-- Name: cvcandidat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.cvcandidat_id_seq', 16, true);


--
-- Name: cvrequirements_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.cvrequirements_id_seq', 5, true);


--
-- Name: diplome_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.diplome_id_seq', 1, false);


--
-- Name: domaine_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.domaine_id_seq', 1, false);


--
-- Name: employe_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.employe_id_seq', 10, true);


--
-- Name: experience_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.experience_id_seq', 1, false);


--
-- Name: fournisseur_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.fournisseur_id_seq', 2, true);


--
-- Name: heure_suplementaire_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.heure_suplementaire_id_seq', 4, true);


--
-- Name: historique_salaire_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.historique_salaire_id_seq', 1, false);


--
-- Name: matrimoniale_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.matrimoniale_id_seq', 1, false);


--
-- Name: messenger_messages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.messenger_messages_id_seq', 1, false);


--
-- Name: mode_paiment_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.mode_paiment_id_seq', 2, true);


--
-- Name: nationalite_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.nationalite_id_seq', 1, false);


--
-- Name: reponse_section_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.reponse_section_id_seq', 36, true);


--
-- Name: section_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.section_id_seq', 19, true);


--
-- Name: section_reponse_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.section_reponse_id_seq', 31, true);


--
-- Name: service_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.service_id_seq', 3, true);


--
-- Name: sexe_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.sexe_id_seq', 2, true);


--
-- Name: test_aptitude_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.test_aptitude_id_seq', 29, true);


--
-- Name: test_candidat_note_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.test_candidat_note_id_seq', 17, true);


--
-- Name: test_resultat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.test_resultat_id_seq', 30, true);


--
-- Name: utilisateur_id_seq; Type: SEQUENCE SET; Schema: public; Owner: liantsiky
--

SELECT pg_catalog.setval('public.utilisateur_id_seq', 6, true);


--
-- Name: adresse adresse_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.adresse
    ADD CONSTRAINT adresse_pkey PRIMARY KEY (id);


--
-- Name: article_fournisseur article_fournisseur_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.article_fournisseur
    ADD CONSTRAINT article_fournisseur_pkey PRIMARY KEY (id);


--
-- Name: article article_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.article
    ADD CONSTRAINT article_pkey PRIMARY KEY (id);


--
-- Name: conge conge_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.conge
    ADD CONSTRAINT conge_pkey PRIMARY KEY (id);


--
-- Name: cv_candidat_note cv_candidat_note_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cv_candidat_note
    ADD CONSTRAINT cv_candidat_note_pkey PRIMARY KEY (id);


--
-- Name: cvcandidat cvcandidat_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT cvcandidat_pkey PRIMARY KEY (id);


--
-- Name: cvrequirements cvrequirements_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvrequirements
    ADD CONSTRAINT cvrequirements_pkey PRIMARY KEY (id);


--
-- Name: diplome diplome_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.diplome
    ADD CONSTRAINT diplome_pkey PRIMARY KEY (id);


--
-- Name: doctrine_migration_versions doctrine_migration_versions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);


--
-- Name: domaine domaine_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.domaine
    ADD CONSTRAINT domaine_pkey PRIMARY KEY (id);


--
-- Name: employe employe_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.employe
    ADD CONSTRAINT employe_pkey PRIMARY KEY (id);


--
-- Name: experience experience_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.experience
    ADD CONSTRAINT experience_pkey PRIMARY KEY (id);


--
-- Name: fournisseur fournisseur_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.fournisseur
    ADD CONSTRAINT fournisseur_pkey PRIMARY KEY (id);


--
-- Name: heure_suplementaire heure_suplementaire_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.heure_suplementaire
    ADD CONSTRAINT heure_suplementaire_pkey PRIMARY KEY (id);


--
-- Name: historique_salaire_employe historique_salaire_employe_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.historique_salaire_employe
    ADD CONSTRAINT historique_salaire_employe_pkey PRIMARY KEY (historique_salaire_id, employe_id);


--
-- Name: historique_salaire historique_salaire_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.historique_salaire
    ADD CONSTRAINT historique_salaire_pkey PRIMARY KEY (id);


--
-- Name: matrimoniale matrimoniale_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.matrimoniale
    ADD CONSTRAINT matrimoniale_pkey PRIMARY KEY (id);


--
-- Name: messenger_messages messenger_messages_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages
    ADD CONSTRAINT messenger_messages_pkey PRIMARY KEY (id);


--
-- Name: mode_paiment mode_paiment_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.mode_paiment
    ADD CONSTRAINT mode_paiment_pkey PRIMARY KEY (id);


--
-- Name: nationalite nationalite_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.nationalite
    ADD CONSTRAINT nationalite_pkey PRIMARY KEY (id);


--
-- Name: reponse_section reponse_section_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.reponse_section
    ADD CONSTRAINT reponse_section_pkey PRIMARY KEY (id);


--
-- Name: section section_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.section
    ADD CONSTRAINT section_pkey PRIMARY KEY (id);


--
-- Name: section_reponse section_reponse_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.section_reponse
    ADD CONSTRAINT section_reponse_pkey PRIMARY KEY (id);


--
-- Name: service service_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.service
    ADD CONSTRAINT service_pkey PRIMARY KEY (id);


--
-- Name: sexe sexe_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.sexe
    ADD CONSTRAINT sexe_pkey PRIMARY KEY (id);


--
-- Name: test_aptitude test_aptitude_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.test_aptitude
    ADD CONSTRAINT test_aptitude_pkey PRIMARY KEY (id);


--
-- Name: test_candidat_note test_candidat_note_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.test_candidat_note
    ADD CONSTRAINT test_candidat_note_pkey PRIMARY KEY (id);


--
-- Name: test_resultat test_resultat_pkey; Type: CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.test_resultat
    ADD CONSTRAINT test_resultat_pkey PRIMARY KEY (id);


--
-- Name: utilisateur utilisateur_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.utilisateur
    ADD CONSTRAINT utilisateur_pkey PRIMARY KEY (id);


--
-- Name: idx_1d1c63b3ca088781; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1d1c63b3ca088781 ON public.utilisateur USING btree (cv_candidat_note_id);


--
-- Name: idx_2d737aef8b834daf; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_2d737aef8b834daf ON public.section USING btree (test_aptitude_id);


--
-- Name: idx_2ed893481b65292; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_2ed893481b65292 ON public.conge USING btree (employe_id);


--
-- Name: idx_307d17a91b063272; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_307d17a91b063272 ON public.cvrequirements USING btree (nationalite_id);


--
-- Name: idx_307d17a926f859e2; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_307d17a926f859e2 ON public.cvrequirements USING btree (diplome_id);


--
-- Name: idx_307d17a94272fc9f; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_307d17a94272fc9f ON public.cvrequirements USING btree (domaine_id);


--
-- Name: idx_307d17a9448f3b3c; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_307d17a9448f3b3c ON public.cvrequirements USING btree (sexe_id);


--
-- Name: idx_307d17a946e90e27; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_307d17a946e90e27 ON public.cvrequirements USING btree (experience_id);


--
-- Name: idx_307d17a94de7dc5c; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_307d17a94de7dc5c ON public.cvrequirements USING btree (adresse_id);


--
-- Name: idx_307d17a9978adc39; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_307d17a9978adc39 ON public.cvrequirements USING btree (matrimoniale_id);


--
-- Name: idx_307d17a9ed5ca9e6; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_307d17a9ed5ca9e6 ON public.cvrequirements USING btree (service_id);


--
-- Name: idx_369eca32bda57703; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_369eca32bda57703 ON public.fournisseur USING btree (mode_paiment_id);


--
-- Name: idx_3ec260fc9bdf2af8; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_3ec260fc9bdf2af8 ON public.cv_candidat_note USING btree (cvrequirements_id);


--
-- Name: idx_3ec260fcfb88e14f; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_3ec260fcfb88e14f ON public.cv_candidat_note USING btree (utilisateur_id);


--
-- Name: idx_557406421b063272; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_557406421b063272 ON public.cvcandidat USING btree (nationalite_id);


--
-- Name: idx_5574064226f859e2; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_5574064226f859e2 ON public.cvcandidat USING btree (diplome_id);


--
-- Name: idx_557406424272fc9f; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_557406424272fc9f ON public.cvcandidat USING btree (domaine_id);


--
-- Name: idx_55740642448f3b3c; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_55740642448f3b3c ON public.cvcandidat USING btree (sexe_id);


--
-- Name: idx_5574064246e90e27; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_5574064246e90e27 ON public.cvcandidat USING btree (experience_id);


--
-- Name: idx_557406424de7dc5c; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_557406424de7dc5c ON public.cvcandidat USING btree (adresse_id);


--
-- Name: idx_55740642978adc39; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_55740642978adc39 ON public.cvcandidat USING btree (matrimoniale_id);


--
-- Name: idx_557406429bdf2af8; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_557406429bdf2af8 ON public.cvcandidat USING btree (cvrequirements_id);


--
-- Name: idx_55740642fb88e14f; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_55740642fb88e14f ON public.cvcandidat USING btree (utilisateur_id);


--
-- Name: idx_72b856b48b834daf; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_72b856b48b834daf ON public.test_resultat USING btree (test_aptitude_id);


--
-- Name: idx_72b856b4fb88e14f; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_72b856b4fb88e14f ON public.test_resultat USING btree (utilisateur_id);


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
-- Name: idx_8df113c88d4d52e2; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_8df113c88d4d52e2 ON public.section_reponse USING btree (test_resultat_id);


--
-- Name: idx_8df113c8cf18bb82; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_8df113c8cf18bb82 ON public.section_reponse USING btree (reponse_id);


--
-- Name: idx_a3b553c81b65292; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_a3b553c81b65292 ON public.heure_suplementaire USING btree (employe_id);


--
-- Name: idx_a47405d6d823e37a; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_a47405d6d823e37a ON public.reponse_section USING btree (section_id);


--
-- Name: idx_ac1da055670c757f; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_ac1da055670c757f ON public.article_fournisseur USING btree (fournisseur_id);


--
-- Name: idx_ac1da0557294869c; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_ac1da0557294869c ON public.article_fournisseur USING btree (article_id);


--
-- Name: idx_b7934331b65292; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_b7934331b65292 ON public.historique_salaire_employe USING btree (employe_id);


--
-- Name: idx_b7934335e2c7d68; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_b7934335e2c7d68 ON public.historique_salaire_employe USING btree (historique_salaire_id);


--
-- Name: idx_be4893278d4d52e2; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_be4893278d4d52e2 ON public.test_candidat_note USING btree (test_resultat_id);


--
-- Name: idx_f804d3b986af3011; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_f804d3b986af3011 ON public.employe USING btree (superieur_id);


--
-- Name: idx_f804d3b9ed5ca9e6; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE INDEX idx_f804d3b9ed5ca9e6 ON public.employe USING btree (service_id);


--
-- Name: uniq_1d1c63b35126ac48; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_1d1c63b35126ac48 ON public.utilisateur USING btree (mail);


--
-- Name: uniq_8ed758de11dd0168; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE UNIQUE INDEX uniq_8ed758de11dd0168 ON public.test_aptitude USING btree (cv_requirements_id);


--
-- Name: uniq_f804d3b9fb88e14f; Type: INDEX; Schema: public; Owner: liantsiky
--

CREATE UNIQUE INDEX uniq_f804d3b9fb88e14f ON public.employe USING btree (utilisateur_id);


--
-- Name: messenger_messages notify_trigger; Type: TRIGGER; Schema: public; Owner: postgres
--

CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON public.messenger_messages FOR EACH ROW EXECUTE FUNCTION public.notify_messenger_messages();


--
-- Name: utilisateur fk_1d1c63b3ca088781; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.utilisateur
    ADD CONSTRAINT fk_1d1c63b3ca088781 FOREIGN KEY (cv_candidat_note_id) REFERENCES public.cv_candidat_note(id);


--
-- Name: section fk_2d737aef8b834daf; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.section
    ADD CONSTRAINT fk_2d737aef8b834daf FOREIGN KEY (test_aptitude_id) REFERENCES public.test_aptitude(id);


--
-- Name: conge fk_2ed893481b65292; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.conge
    ADD CONSTRAINT fk_2ed893481b65292 FOREIGN KEY (employe_id) REFERENCES public.employe(id);


--
-- Name: cvrequirements fk_307d17a91b063272; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvrequirements
    ADD CONSTRAINT fk_307d17a91b063272 FOREIGN KEY (nationalite_id) REFERENCES public.nationalite(id);


--
-- Name: cvrequirements fk_307d17a926f859e2; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvrequirements
    ADD CONSTRAINT fk_307d17a926f859e2 FOREIGN KEY (diplome_id) REFERENCES public.diplome(id);


--
-- Name: cvrequirements fk_307d17a94272fc9f; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvrequirements
    ADD CONSTRAINT fk_307d17a94272fc9f FOREIGN KEY (domaine_id) REFERENCES public.domaine(id);


--
-- Name: cvrequirements fk_307d17a9448f3b3c; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvrequirements
    ADD CONSTRAINT fk_307d17a9448f3b3c FOREIGN KEY (sexe_id) REFERENCES public.sexe(id);


--
-- Name: cvrequirements fk_307d17a946e90e27; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvrequirements
    ADD CONSTRAINT fk_307d17a946e90e27 FOREIGN KEY (experience_id) REFERENCES public.experience(id);


--
-- Name: cvrequirements fk_307d17a94de7dc5c; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvrequirements
    ADD CONSTRAINT fk_307d17a94de7dc5c FOREIGN KEY (adresse_id) REFERENCES public.adresse(id);


--
-- Name: cvrequirements fk_307d17a9978adc39; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvrequirements
    ADD CONSTRAINT fk_307d17a9978adc39 FOREIGN KEY (matrimoniale_id) REFERENCES public.matrimoniale(id);


--
-- Name: cvrequirements fk_307d17a9ed5ca9e6; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvrequirements
    ADD CONSTRAINT fk_307d17a9ed5ca9e6 FOREIGN KEY (service_id) REFERENCES public.service(id);


--
-- Name: fournisseur fk_369eca32bda57703; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.fournisseur
    ADD CONSTRAINT fk_369eca32bda57703 FOREIGN KEY (mode_paiment_id) REFERENCES public.mode_paiment(id);


--
-- Name: cv_candidat_note fk_3ec260fc9bdf2af8; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cv_candidat_note
    ADD CONSTRAINT fk_3ec260fc9bdf2af8 FOREIGN KEY (cvrequirements_id) REFERENCES public.cvrequirements(id);


--
-- Name: cv_candidat_note fk_3ec260fcfb88e14f; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cv_candidat_note
    ADD CONSTRAINT fk_3ec260fcfb88e14f FOREIGN KEY (utilisateur_id) REFERENCES public.utilisateur(id);


--
-- Name: cvcandidat fk_557406421b063272; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT fk_557406421b063272 FOREIGN KEY (nationalite_id) REFERENCES public.nationalite(id);


--
-- Name: cvcandidat fk_5574064226f859e2; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT fk_5574064226f859e2 FOREIGN KEY (diplome_id) REFERENCES public.diplome(id);


--
-- Name: cvcandidat fk_557406424272fc9f; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT fk_557406424272fc9f FOREIGN KEY (domaine_id) REFERENCES public.domaine(id);


--
-- Name: cvcandidat fk_55740642448f3b3c; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT fk_55740642448f3b3c FOREIGN KEY (sexe_id) REFERENCES public.sexe(id);


--
-- Name: cvcandidat fk_5574064246e90e27; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT fk_5574064246e90e27 FOREIGN KEY (experience_id) REFERENCES public.experience(id);


--
-- Name: cvcandidat fk_557406424de7dc5c; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT fk_557406424de7dc5c FOREIGN KEY (adresse_id) REFERENCES public.adresse(id);


--
-- Name: cvcandidat fk_55740642978adc39; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT fk_55740642978adc39 FOREIGN KEY (matrimoniale_id) REFERENCES public.matrimoniale(id);


--
-- Name: cvcandidat fk_557406429bdf2af8; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT fk_557406429bdf2af8 FOREIGN KEY (cvrequirements_id) REFERENCES public.cvrequirements(id);


--
-- Name: cvcandidat fk_55740642fb88e14f; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.cvcandidat
    ADD CONSTRAINT fk_55740642fb88e14f FOREIGN KEY (utilisateur_id) REFERENCES public.utilisateur(id);


--
-- Name: test_resultat fk_72b856b48b834daf; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.test_resultat
    ADD CONSTRAINT fk_72b856b48b834daf FOREIGN KEY (test_aptitude_id) REFERENCES public.test_aptitude(id);


--
-- Name: test_resultat fk_72b856b4fb88e14f; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.test_resultat
    ADD CONSTRAINT fk_72b856b4fb88e14f FOREIGN KEY (utilisateur_id) REFERENCES public.utilisateur(id);


--
-- Name: section_reponse fk_8df113c88d4d52e2; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.section_reponse
    ADD CONSTRAINT fk_8df113c88d4d52e2 FOREIGN KEY (test_resultat_id) REFERENCES public.test_resultat(id);


--
-- Name: section_reponse fk_8df113c8cf18bb82; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.section_reponse
    ADD CONSTRAINT fk_8df113c8cf18bb82 FOREIGN KEY (reponse_id) REFERENCES public.reponse_section(id);


--
-- Name: test_aptitude fk_8ed758de11dd0168; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.test_aptitude
    ADD CONSTRAINT fk_8ed758de11dd0168 FOREIGN KEY (cv_requirements_id) REFERENCES public.cvrequirements(id);


--
-- Name: heure_suplementaire fk_a3b553c81b65292; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.heure_suplementaire
    ADD CONSTRAINT fk_a3b553c81b65292 FOREIGN KEY (employe_id) REFERENCES public.employe(id);


--
-- Name: reponse_section fk_a47405d6d823e37a; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.reponse_section
    ADD CONSTRAINT fk_a47405d6d823e37a FOREIGN KEY (section_id) REFERENCES public.section(id);


--
-- Name: article_fournisseur fk_ac1da055670c757f; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.article_fournisseur
    ADD CONSTRAINT fk_ac1da055670c757f FOREIGN KEY (fournisseur_id) REFERENCES public.fournisseur(id);


--
-- Name: article_fournisseur fk_ac1da0557294869c; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.article_fournisseur
    ADD CONSTRAINT fk_ac1da0557294869c FOREIGN KEY (article_id) REFERENCES public.article(id);


--
-- Name: historique_salaire_employe fk_b7934331b65292; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.historique_salaire_employe
    ADD CONSTRAINT fk_b7934331b65292 FOREIGN KEY (employe_id) REFERENCES public.employe(id) ON DELETE CASCADE;


--
-- Name: historique_salaire_employe fk_b7934335e2c7d68; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.historique_salaire_employe
    ADD CONSTRAINT fk_b7934335e2c7d68 FOREIGN KEY (historique_salaire_id) REFERENCES public.historique_salaire(id) ON DELETE CASCADE;


--
-- Name: test_candidat_note fk_be4893278d4d52e2; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.test_candidat_note
    ADD CONSTRAINT fk_be4893278d4d52e2 FOREIGN KEY (test_resultat_id) REFERENCES public.test_resultat(id);


--
-- Name: employe fk_f804d3b986af3011; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.employe
    ADD CONSTRAINT fk_f804d3b986af3011 FOREIGN KEY (superieur_id) REFERENCES public.employe(id);


--
-- Name: employe fk_f804d3b9ed5ca9e6; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.employe
    ADD CONSTRAINT fk_f804d3b9ed5ca9e6 FOREIGN KEY (service_id) REFERENCES public.service(id);


--
-- Name: employe fk_f804d3b9fb88e14f; Type: FK CONSTRAINT; Schema: public; Owner: liantsiky
--

ALTER TABLE ONLY public.employe
    ADD CONSTRAINT fk_f804d3b9fb88e14f FOREIGN KEY (utilisateur_id) REFERENCES public.utilisateur(id);


--
-- PostgreSQL database dump complete
--

