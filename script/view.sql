-- get les articles non traites et deja groupé
create or replace view v_get_articles_non_traite_groupe as select article_id, sum(quantite) as quantite_total from demande_departement where statut = 1 
group by article_id;

--get les articles non traites pas groupé
create or replace view v_get_articles_non_traite as select * from demande_departement where statut = 1 ;

--get les proformats qui n'ont pas encore ete envoye au departement financier
create or replace view v_get_proformat_not_send as select * from proformat_article where statut = 1;

--get les differents fournisseurs des proformats non envoyes
-- create or replace view v_get_fournisseur_proformat_not_send as select distinct(p.fournisseur_id),f.des_fournisseur,f.mode_paiement_id from proformat_article  as p
-- join fournisseur as f on f.id= p.fournisseur_id where p.statut = 1;
create or replace view v_get_fournisseur_proformat_not_send as select distinct(fournisseur_id) from proformat_article where statut = 1;

--get les proformats envoyes a la finance
create or replace view  v_get_proformat_send as select * from proformat_article where statut = 10;

--get les  fournisseurs des proformats envoyes
create or replace view  v_get_fournisseur_proformat_send as select distinct(fournisseur_id) from v_get_proformat_send

create or replace view v_immobilisation_non_traite as
select i.*
    from immobilisation i 
    left join immobilisation_details di on di.immobilisation_id=i.id
    where di.id is null

create or replace view v_immobilisation_traite as
select i.*
    from immobilisation i 
    left join immobilisation_details di on di.immobilisation_id=i.id
    where di.id is not null

create or replace view v_immobilisation_permission as
select
    i.article_id, p.* 
    from immobilisation i
    join immobilisation_permission p on i.id = p.immobilisation_id