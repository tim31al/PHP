SELECT f.id, f.name, SUM(s.price) as total FROM tickets as t JOIN sessions as s ON t.session_id = s.id JOIN films as f ON s.film_id = f.id GROUP BY f.id ORDER BY total DESC LIMIT 1;