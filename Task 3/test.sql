SELECT
    u.user_id,
    u.first_name,
    u.last_name,
    COALESCE(AVG(tr.correct),
    0) AS avg_correct_answers,
    MAX(tr.time_taken) AS most_recent_test_time
FROM
    `user` u
LEFT JOIN `test_result` tr ON
    u.user_id = tr.user_id
GROUP BY
    u.user_id,
    u.first_name,
    u.last_name
ORDER BY
    u.user_id;