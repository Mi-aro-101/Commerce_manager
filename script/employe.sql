insert into employe values
(1,1,null,'2022-03-01',true,true,5000000,3,5,'Directeur Ressources humaines'),
(2,2,null,'2023-03-01',true,true,2000000,2,5,'Devops'),
(3,3,null,'2023-03-01',true,true,2000000,2,5,'Devops'),
(4,4,null,'2022-03-01',true,true,3500000,4,5,'Directeur des achats'),
(5,5,null,'2022-03-01',true,true,3500000,2,1,'Chef Departement informatique'),
(6,6,null,'2022-03-01',true,true,3500000,1,5,'Chef Service Securite');

select article_id, sum(quantite) from demande_departement where statut = 1 
group by article_id;