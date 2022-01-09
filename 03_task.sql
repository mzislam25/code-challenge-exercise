SELECT user.user_id,user.first_name,user.last_name, AVG(test_result.correct) as avg_correct_answer, MAX(test_result.time_taken) as time_taken FROM user LEFT JOIN test_result ON user.user_id = test_result.user_id GROUP BY user_id;