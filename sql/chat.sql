--
-- Database: chat
--

-- --------------------------------------------------------

--
-- Table structure for table chat_message
--

CREATE SEQUENCE chat_message_id_seq;

CREATE TABLE chat_message (
  id int NOT NULL PRIMARY KEY DEFAULT nextval('chat_message_id_seq'),
  to_user_id int NOT NULL,
  from_user_id int NOT NULL,
  chat_message text NOT NULL,
  timestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  status int NOT NULL
);

ALTER SEQUENCE chat_message_id_seq
OWNED BY chat_message.id;

-- --------------------------------------------------------

--
-- Table structure for table login
--

CREATE SEQUENCE login_id_seq;

CREATE TABLE login (
  id int NOT NULL PRIMARY KEY DEFAULT nextval('login_id_seq'),
  username varchar NOT NULL,
  password varchar NOT NULL
);

ALTER SEQUENCE login_id_seq
OWNED BY login.id;

--
-- Dumping data for table login
--

INSERT INTO login (id, username, password) VALUES
(1, 'johnsmith', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2,'peterParker', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396');

-- --------------------------------------------------------

--
-- Table structure for table login_details
--

CREATE TYPE unbool AS ENUM ('no', 'yes');

CREATE SEQUENCE login_details_id_seq;

CREATE TABLE login_details (
  id int NOT NULL PRIMARY KEY DEFAULT nextval('login_details_id_seq'),
  id int NOT NULL,
  last_activity timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  is_type unbool NOT NULL
);

ALTER SEQUENCE login_details_id_seq
OWNED BY login_details.id;

--
-- Indexes for dumped tables
--

--
-- Indexes for table chat_message
--
ALTER TABLE chat_message
  ADD PRIMARY KEY (id);

--
-- Indexes for table login
--
ALTER TABLE login
  ADD PRIMARY KEY (id);

--
-- Indexes for table login_details
--
ALTER TABLE login_details
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table chat_message
--
ALTER TABLE chat_message
  MODIFY id int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table login
--
ALTER TABLE login
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table login_details
--
ALTER TABLE login_details
  ALTER id 
    SET NOT NULL SERIAL;