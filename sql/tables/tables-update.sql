-- Ex 1

USE webDevelopment;

-- ALTER TABLE languages
--     ADD versions VARCHAR(20);

-- EX 2

-- ALTER TABLE frameworks
--     ADD version INT;

-- EX 3

ALTER TABLE languages
CHANGE versions version VARCHAR(20)

-- EX 4

ALTER TABLE frameworks
CHANGE name framework VARCHAR(40)
    
-- EX 5
ALTER TABLE frameworks
CHANGE version version VARCHAR(10)

-- TP 
USE codex;

ALTER TABLE clients
DROP secondPhoneNumber,
CHANGE firstNumber phoneNumber VARCHAR(30),
ADD zipCode VARCHAR(20),
ADD city VARCHAR(20)