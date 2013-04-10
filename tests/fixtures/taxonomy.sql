DELETE FROM /*PREFIX*/wp_term_taxonomy;
DELETE FROM /*PREFIX*/wp_terms;
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES ( 1, 'tag 1',   'tag-1',   0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES (11, 'tag 1.1', 'tag-1-1', 0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES (12, 'tag 1.2', 'tag-1-2', 0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES (13, 'tag 1.3', 'tag-1-3', 0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES ( 2, 'tag 2',   'tag-2',   0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES (21, 'tag 2.1', 'tag-2-1', 0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES (22, 'tag 2.2', 'tag-2-2', 0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES (23, 'tag 2.3', 'tag-2-3', 0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES ( 3, 'tag 3',   'tag-3',   0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES (31, 'tag 3.1', 'tag-3-1', 0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES (32, 'tag 3.2', 'tag-3-2', 0);
INSERT INTO /*PREFIX*/wp_terms(term_id, name, slug, term_group) VALUES (33, 'tag 3.3', 'tag-3-3', 0);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES ( 1,  1, 'post_tag', '', 0, 10);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES (11, 11, 'post_tag', '', 0, 11);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES (12, 12, 'post_tag', '', 0, 12);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES (13, 13, 'post_tag', '', 0,  0);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES ( 2,  2, 'post_tag', '', 0, 20);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES (21, 21, 'post_tag', '', 0, 21);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES (22, 22, 'post_tag', '', 0, 22);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES (23, 23, 'post_tag', '', 0,  0);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES ( 3,  3, 'post_tag', '', 0,  0);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES (31, 31, 'post_tag', '', 0, 31);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES (32, 32, 'post_tag', '', 0, 32);
INSERT INTO /*PREFIX*/wp_term_taxonomy(term_taxonomy_id, term_id, taxonomy, description, parent, count) VALUES (33, 33, 'post_tag', '', 0,  0);
