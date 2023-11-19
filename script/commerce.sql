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

SET default_tablespace = '';

SET default_table_access_method = heap;

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
-- Name: utilisateur utilisateur_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.utilisateur
    ADD CONSTRAINT utilisateur_pkey PRIMARY KEY (id);


--
-- Name: idx_1d1c63b3ca088781; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1d1c63b3ca088781 ON public.utilisateur USING btree (cv_candidat_note_id);


--
-- Name: uniq_1d1c63b35126ac48; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_1d1c63b35126ac48 ON public.utilisateur USING btree (mail);


--
-- Name: utilisateur fk_1d1c63b3ca088781; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.utilisateur
    ADD CONSTRAINT fk_1d1c63b3ca088781 FOREIGN KEY (cv_candidat_note_id) REFERENCES public.cv_candidat_note(id);


--
-- PostgreSQL database dump complete
--

