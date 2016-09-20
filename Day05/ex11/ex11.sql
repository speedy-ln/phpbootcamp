SELECT UPPER(subscription.`name`) AS `NAME`,
  subscription.price,
  user_card.last_name
FROM member INNER JOIN subscription ON member.id_sub = subscription.id_sub
  INNER JOIN user_card ON user_card.id_user = member.id_user_card
WHERE subscription.price > 42
ORDER BY subscription.`name` ASC, user_card.last_name ASC;