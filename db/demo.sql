PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE taps (number integer, fullsize integer, currentsize integer, name text, style text, brewDate text, og real, fg real, srm real, ibu integer, container text, servingSizeValue real, servingSizeUnits text, notes text);
INSERT INTO "taps" VALUES(1,100,0,'Belgo Americano','Belgian Specialty','December 3',1.073,1.019,6.0,27,'tulip',12.0,'fl. oz.','A Belgian Tripel with copious American hops.  Big citrus and pine with a hint of herbal hops combine with an enticing hint of spice on the nose.  Luscious creamy mouthfeel gives way to a nice dry, but not-too-bitter finish.');
INSERT INTO "taps" VALUES(2,100,0,'Ace Pear Cider','Common Perry','Commercially',1.045,1.005,3.0,0,'standardpint',16.0,'fl. oz.','It''s an apple cider with pear juice (or maybe flavoring).  What else can I say?');
INSERT INTO "taps" VALUES(3,100,0,'Jerimiah''s Red Bearded Ale','American Amber','December 3',1.054,1.014,18.0,37,'standardpint',12.0,'fl. oz.','The house red ale.  Lots of American hops and a hint of caramel on the nose.  Medium to full body with nice caramel notes lingering in the finish.  Bitter and sweet in perfect balance.');
INSERT INTO "taps" VALUES(4,100,0,'Dave''s Dry Stout','Dry Stout','February 2 ',1.044,1.012,40.0,22,'nonic',16.0,'fl. oz.','It''s a stout, it''s dry, and it''s Dave''s recipe, but way smaller.  Surprisingly light bodied and eminently quaffable, especially on nitro.  Bet you can''t drink just one!');
INSERT INTO "taps" VALUES(5,100,0,'Hefeweizen','Hefeweizen','February 25',1.052,1.012,5.0,10,'weizenglass',500.0,'ml','A classic Bavarian Hefeweizen augments the sweet grainy character of German Pilsner and white wheat malts with a gentle hint of bananna and clove.  Simple, light, fresh, and refereshing.');
COMMIT;
