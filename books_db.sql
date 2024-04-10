-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 07:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` int(10) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `story` text NOT NULL,
  `book_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `book_name`, `img`, `title`, `story`, `book_type`) VALUES
(21, 'THE MERMAID STORY', 'mermaid.png', '', 'Once upon a time, deep down under the sea, lived a little mermaid. She lived with her father, the Sea King, in a palace made of blue coral. Her favourite food was seabiscuits.\r\n\r\nThe Sea King told all the merfolk that they must never go up to the surface. He thought humans were just too dangerous.\r\n\r\nBut the little mermaid thought humans were very interesting. She loved checking out the old shipwrecks on the seafloor, collecting all the old human things.\r\n\r\nOne day, she was out swimming with her best friend, the crab. They were quite near the surface! The crab kept telling her to keep her head in the water where it belonged.\r\n\r\nThen she saw a boat pass overhead. She went right up to the surface to get a closer look. She could see a handsome young man playing with his dog.\r\n\r\nThe young man was a prince. As the little mermaid watched, a big storm blew in. And the dog’s lead fell out of the prince’s hand.\r\nHe stretched out to grab it but fell overboard with a great splash.\r\n\r\nThe dog was barking his head off!\r\nThe prince started sinking deeper and deeper. The trouble was he was a terrible swimmer. In fact, he could swim about as well as….. a stone!\r\nBut the little mermaid swam down and scooped him up. She brought him back to the beach and sang softly to make him feel better. Once, he opened his eyes a little bit and saw her kind face looking down at him.\r\n\r\nThen he fell fast asleep. When he woke up he promised himself that he would find the girl who rescued him. He wanted to thank her.\r\nHe looked and looked, but couldn’t find her. He didn’t know that the girl who had saved him wasn\'t in the kingdom, but under it. In the sea.\r\n\r\nWhen the Sea King found out that the little mermaid had been to the surface he was furious!\r\nHe only wanted to protect her, so he decided he would stop her interest in humans once and for all. He used his magic trident and smashed all of her human treasures to pieces.\r\n\r\nThe little mermaid was very upset and burst into tears when she saw all her broken treasures.\r\nThen she thought how fantastic it would be if she could just go back to the surface one more time to look for more.\r\n\r\nOne day she was out swimming on her own when she met the sea witch, who said she could turn the little mermaid into a human for three days.\r\n“Now, there’s an interesting idea,” she thought.\r\nThe sea witch worked her magic and turned her mermaid tail into legs!She swam to the shore and, as you can imagine, it wasn’t easy without her mermaid tail.\r\n\r\nWhen she got to the beach she had to learn how to use her new legs!The prince was walking his dog along the beach and suddenly he saw the little mermaid. He realised that she was the one who had saved him.\r\n\r\n“Please come to my castle, so I can thank you properly,” he said.“Oh, yes please,” she answered, “I’ve never been to a human castle!”At the castle she was given a beautiful new dress and some jewels. At a grand dinner table she was served lots of different foods but she didn’t like the look of them very much.\r\n\r\n“Not hungry?” asked the prince.\r\n“Not really,” said the little mermaid, “by the way, what’s this?” she asked.\r\n“It’s a burger, of course,” said the prince. He was a bit surprised at this.The next day, the prince took her on a carriage ride. She was fascinated by everything she saw and wondered how everything worked.At the end of the day, the prince took her out on a rowing boat.\r\n\r\nShe took one look at the deep blue water and realised that she really wanted to go home.\r\nThe sea witch had been watching all this in her crystal ball.\r\n\r\n“That girl has got a choice. She either lives as a human or a mermaid,” thought the sea witch.The trouble was that the little mermaid really liked the prince. And the prince really liked her. So did his dog!\r\n\r\nThen suddenly her best friend, the crab, swam up to the side of the boat. He looked sad.Then she knew what she must do.She knew she would miss her family and friends far too much. \r\nSo, she thanked the prince and told him she had to go home.Just as the sun went below the horizon her legs turned back into a tail and she was back to being a mermaid.Then she felt really hungry and she couldn’t wait to eat some yummy seabiscuits.\r\n\r\nShe swam happily back to her family and friends in the coral palace deep under the sea. After all, that’s where she really belonged.\r\n', 'ShortStory'),
(24, 'PETER PAN', 'peter_pan_adventure.png', '', 'Once upon a time in London, there lived three children. Wendy, John and Michael were their names. One night, Wendy woke up and saw a strange boy sitting on the floor. He looked cross.\r\n“My name is Wendy,” she said, and asked the boy, “Who are you, and why do you look so cross?”\r\nThe boy replied, “I’m Peter Pan. I’m cross because my shadow won’t stick to me.”\r\n“Oh, I can fix that,” Wendy said and sewed Peter’s shadow to the tips of his shoes. Peter was now happy.\r\n“Will you please fly back to Neverland with me and my fairy, Tinker Bell?” Peter asked Wendy, “You could be our mother and take care of us.”\r\n“Will you teach me how to fly?” Wendy asked and Peter nodded.\r\n“I’ll wake John and Michael up. If you teach all of us to fly, we can go to Neverland,” Wendy said.\r\nIt wasn’t long before all three children were flying around in the bedroom. Suddenly, with a whoosh, they all flew out of the window and followed the golden arrows that pointed the way to the beautiful land of Neverland. Soon, all of them were flying over the island.\r\n“The mermaids live over there in the lagoon and there are pirates too! Their boss is Captain Hook,” Peter said.\r\n\r\n“Pirates?” asked Wendy, a bit frightened. But Michael and John wished to see the pirates right away.\r\n\r\nPeter said to them, “Hook’s the meanest pirate ever, but he’s frightened of the crocodiles.”\r\n\r\nPeter told them that a crocodile had bitten Hook’s hand off years ago. The crocodile liked the taste so much that it followed him, hoping for more.\r\n\r\nBut the crocodile had swallowed his clock and the tick, tock, tick, tock sound warned Hook when the crocodile is nearby.\r\n\r\n“Oh, I’m not sure I want to stay in Neverland after all.” Wendy said.\r\n\r\nPeter then took Wendy, John, and Michael to his house in the woods, through a secret door.\r\n“Will you be our mother?” the Lost Boys shouted when they saw Wendy.\r\n\r\n“But I’m only a little girl,” replied Wendy.\r\n\r\n“Oh, all right, I’ll do my best.” Wendy said as the Lost Boys were sad.\r\n\r\nAnd so, Wendy tucked the boys into bed that night and told them a story.\r\n\r\nOne day, Peter and the children went exploring around the mermaids’ lagoon. All of a sudden, Peter yelled, “Pirates! Hide everyone!”\r\n\r\nThe boys ran away, while Wendy and Peter hid.\r\n\r\nPeter saw that the pirates had tied up Tiger Lily, the Indian princess, to a rock.\r\n\r\nPeter must save her! He shouted in Captain Hook’s voice, “Set the princess free!”\r\n\r\n“Captain, you told us to bring her here!” one of the pirates yelled.\r\n\r\n“Let her go!” Peter roared in captain’s voice again.\r\n\r\n“Aye, aye, captain” the pirate said and set the princess free.\r\n\r\nWhen Captain Hook found out about this, he knew that Peter had tricked the pirates and was very angry!\r\n\r\nThat night, Wendy told the Lost Boys a story about three children who left their parents and flew to Neverland. She told them that their mother and father missed them very much.\r\n\r\n“Did they ever go back to them?” asked one of the Lost Boys.\r\n\r\n“Yes,” replied Wendy, “they flew home to their mother and father, and everyone was happy like before.”\r\n\r\nThis made Wendy, John, and Michael feel homesick and they decided to fly back home the following morning.\r\n\r\n“If you come back with us, I’m sure our parents would look after you.” Wendy told the Lost Boys.\r\n\r\n“Yay! Hooray!” shouted the Lost Boys in excitement.\r\n\r\nBut Peter and Tinker Bell didn’t want to live where grown-ups told children what to do. So, Peter was sad that his friends will leave soon. He asked Tinker Bell to guide all of them to home.\r\n\r\nEarly the next morning, Tinker Bell and the children left Peter’s house. Captain Hook’s pirates were hiding nearby to capture all the children. They caught them, tied them up, and took them to the pirate’s ship.\r\nTinker Bell escaped and flew back to tell Peter what had happened.\r\n\r\n“Who wants to be a pirate?” asked Captain Hook and the boys shook their heads.\r\n\r\n“Make them walk on the planks!” shouted Captain Hook.\r\n\r\nThe boys were afraid, but tried to act brave.\r\n\r\nSuddenly, all of them heard the “tick, tock” of the crocodile and now Captain Hook was afraid.\r\n\r\nBut it was Peter pretending to be a crocodile by producing a similar sound to the crocodiles’s  “tick, tock.”\r\n\r\nPeter flew onto the ship and shouted, “I’ve got you now, Hook!”\r\nCaptain Hook jumped up and swung at Peter with his sword, but he missed and it fell right into the sea. Unfortunately, the crocodile was waiting for him in the water and that was the end of Captain Hook!\r\nPeter and Tinker Bell set off for London with Wendy, John, Michael all the boys. Wendy’s mother and father were very happy to see their children again and hugged them. They also said that they would look after all the Lost Boys.\r\n\r\n“I’m going to stay in Neverland where I never have to grow up,” Peter said.\r\n\r\n“Goodbye, Peter. We’ll miss you,” everyone bid him goodbye.\r\n\r\nSo, Peter Pan and Tinker Bell flew back home to Neverland.', 'Adventure'),
(25, 'THE LOST TREASURE', 'The Lost Treasure.png', '', 'In a small coastal town, there was a legend of a lost treasure hidden on a nearby island. Many had tried to find it, but none had succeeded. One day, a group of friends decided to embark on an adventure to find the treasure.\r\n\r\nThey rented a small boat and set sail for the island. As they approached the shore, they noticed a cave hidden behind some rocks. They decided to explore the cave, hoping it would lead them to the treasure.\r\n\r\nInside the cave, they found a series of tunnels that twisted and turned in different directions. They followed the tunnels, using a map they had found in an old book to guide them.\r\n\r\nAfter hours of exploring, they finally reached a large chamber deep within the cave. There, they found a chest covered in dust and cobwebs. Excitedly, they opened the chest and found it filled with gold coins and precious gems.\r\n\r\nThey couldn\'t believe their luck. They had found the lost treasure at last. They quickly gathered up the treasure and made their way back to the boat, eager to return home and share their discovery with the townspeople.\r\n\r\nAs they sailed back to the town, they were filled with joy and excitement. They knew that their lives would never be the same again, thanks to the adventure they had embarked on and the treasure they had found.\r\n\r\nWhen they returned to the town, they were hailed as heroes. The townspeople were amazed by their discovery and celebrated their bravery and determination.\r\n\r\nFrom that day on, the friends were known as the greatest adventurers in the town\'s history. And the legend of the lost treasure became a story told to children for generations to come, inspiring them to seek out their own adventures and discover their own treasures.', 'Adventure'),
(26, 'ADALINA', 'adalina.png', '', 'Adalina was no ordinary fairy. No one knew why, but she had no wings. And, what’s more, she was a Princess, daughter of the Great Fairy Queen. As she was so tiny, like a flower, life was just a series of problems for her. Not only couldn’t she fly, but she hardly had any magical powers, since fairy magic comes from their delicate crystal wings.\r\n\r\nSo, from an early age, Adalina had depended on the help of others for many things. She grew up thanking people, smiling and being friendly, so naturally all the creatures in the forest were delighted to help her.\r\nBut when she reached the age to become Queen, many fairies doubted she could be a good Queen with such a disability. They argued and protested so much that Adalina had to agree to take a test in which she would have to demonstrate to everyone the wonders she could work.\r\n\r\nThe little fairy became extremely sad. What could she do? She was hardly magic at all, and couldn\'t even travel far with those little legs of hers. But while Adalina sat on a stone next to the river, trying to think of something that would surprise the other fairies, the news of the test was spreading among the friendly forest animals. Before long, hundreds of creatures were by her side, ready to help her however she needed.\r\n-“Thank you so much, little friends. I feel much better with you by my side,”\r\n\r\nshe said with the sweetest of smiles,\r\n\r\n-\"but I don\'t know whether you\'ll be able to help me.\"\r\n\r\n-“Of course we will!”\r\n\r\nanswered the squirrel,\r\n\r\n-“Tell us, what will you do to surprise those foolish fairies?”\r\n-“Wow…. if only I could, I would love to capture the first ray of sunshine before it touches the Earth, and keep it in a dewdrop, so that when it was needed it could be used as a lantern for all who live in the forest. Or… I’d also like to paint a rainbow in the night sky, under the pale moonlight, so that the nocturnal creatures could see its beauty… But I don’t have any magic or any wings to keep it in…”\r\n\r\n-“Well, you must have your magic kept somewhere else then! Look!\"\r\n\r\nan old tortoise shouted excitedly, as it flew through the air, leaving a trail of green behind it.\r\n\r\nIt was true. When Adalina had been telling her friends of her deepest wishes, a wave of magic had washed over them, and there they all were, flying through the air, making a magic rainbow, and capturing not just one but hundreds of rays of sunshine within fine drops of water that filled the sky with tiny brilliant lamps. For the whole day and night you could see squirrels, mice, frogs, birds and fish leaping through the sky, filling it with light and colour, in a spectacle never seen before and that filled the forest dwellers with delight.\r\n\r\nAdalina was declared Queen of the Fairies, despite her not knowing from where such a powerful magic had come. And it wasn’t until some time later that the young Queen understood that she was the first of the Great Fairies, whose magic is to be found not in one\'s wings but within all one’s true friends.', 'Fantacy'),
(27, 'THE HAUNTED HOUSE', 'horror3.png', '', 'In a small town, there was an old, abandoned house at the end of the street. It was said to be haunted, and no one dared to go near it. One day, a group of friends decided to explore the house, curious about the stories they had heard.\r\n\r\nAs they entered the house, they felt a chill in the air. The walls were covered in cobwebs, and the furniture was old and dusty. They laughed nervously, trying to shake off the feeling of dread that was creeping over them.\r\n\r\nSuddenly, they heard a loud creaking noise coming from upstairs. They froze in fear, unsure of what to do. One of the friends suggested they leave, but before they could move, they heard footsteps coming down the stairs.\r\n\r\nThey watched in horror as a figure appeared at the bottom of the stairs. It was a ghostly figure, glowing faintly in the dim light. The friends screamed and ran for the door, but it was locked.\r\n\r\nThey were trapped in the haunted house with the ghostly figure approaching them slowly. They searched frantically for a way out, but all the windows were boarded up.\r\n\r\nAs the ghostly figure reached out to them, they huddled together, closing their eyes and praying for a miracle. Suddenly, the figure vanished, and the house was silent once again.\r\n\r\nThe friends opened their eyes, relieved to see that the ghostly figure was gone. They quickly found a way out of the house and ran home, vowing never to return to the haunted house again.\r\n\r\nFrom that day on, the house remained empty, a reminder of the terrifying encounter the friends had experienced. And the townspeople whispered about the haunted house, warning others to stay away unless they wanted to face the same fate.', 'Horror'),
(28, 'THE MISSING DIAMOND', 'party.png', '', 'In a small town called Oaksville, there was a famous jewelry store owned by Mr. Thompson. One day, a valuable diamond necklace disappeared from the store. The necklace was worth a fortune, and Mr. Thompson was very worried.\r\n\r\nMr. Thompson called the police, and Detective Brown was assigned to the case. Detective Brown was known for solving difficult cases, and he was determined to find the missing necklace.\r\n\r\nDetective Brown started by questioning the store employees and customers who were in the store on the day of the theft. He also checked the security camera footage, but it didn\'t show anything suspicious.\r\n\r\nNext, Detective Brown decided to visit the town\'s pawn shops to see if anyone had tried to sell the stolen necklace. He visited several pawn shops but didn\'t find any leads.\r\n\r\nAs he was walking back to his car, Detective Brown noticed a young boy sitting on a bench near the pawn shop. The boy looked nervous, and Detective Brown decided to talk to him.\r\n\r\nThe boy\'s name was Tommy, and he lived in Oaksville. Detective Brown asked Tommy if he had seen anything unusual recently. Tommy hesitated at first but then confessed that he had found a shiny necklace near the park a few days ago.\r\n\r\nDetective Brown\'s eyes widened with interest. He asked Tommy to show him the necklace, and Tommy led him to a bush near the park where he had hidden it.\r\n\r\nSure enough, the necklace was there, glittering in the sunlight. Detective Brown was thrilled. He thanked Tommy for his honesty and took the necklace back to Mr. Thompson\'s store.\r\n\r\nMr. Thompson was overjoyed to have his precious necklace back. He thanked Detective Brown for his hard work and asked him how he had found it.\r\n\r\nDetective Brown smiled and told Mr. Thompson about Tommy. He explained that sometimes, the most unexpected people can help solve a case.\r\n\r\nFrom that day on, Tommy became a local hero in Oaksville. And Detective Brown was hailed as a brilliant detective who could solve any mystery, no matter how small.', 'Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`, `type`) VALUES
(1, 'kushi', 'kushi02@gmail.com', 21, '123', 1),
(2, 'para', 'para@gmail.com', 22, '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
