SELECT * FROM parent_a
	JOIN child_a_1 USING parent_a_id
	JOIN child_a_2 USING parent_a_id
	JOIN child_a_2_1 USING child_a_2_id;
SELECT * FROM parent_b
	JOIN child_b_1 USING parent_b_id;
SELECT * FROM parent_c;