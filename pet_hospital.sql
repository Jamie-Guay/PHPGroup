USE pet_hospital;

LOCK TABLES `Animals` WRITE;
/*!40000 ALTER TABLE `Animals` DISABLE KEYS */;
INSERT INTO `Animals` VALUES (1,'Hamilton',0,0,0),(2,'Bentley',1,1,1),(3,'Yates',2,2,2),(4,'Poppy',3,3,3),(5,'Ellison',4,4,4),(6,'Connor',5,5,5),(7,'Arabella',6,6,6),(8,'Rugby',7,7,7),(9,'Margaux',8,8,8),(10,'Darcy',9,9,9);
/*!40000 ALTER TABLE `Animals` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `Hospitals` WRITE;
/*!40000 ALTER TABLE `Hospitals` DISABLE KEYS */;
INSERT INTO `Hospitals` VALUES (1,'Pawesome Veterinary Care','Los Angeles, CA'),(2,'Paw-sibilities Animal Hospital','Los Angeles, CA'),(3,'Full Pet-tential Care Center','Los Angeles, CA'),(4,'Cat-astrophic Emergency Room','Los Angeles, CA'),(5,'Pay-Purr Chase Clinic','Los Angeles, CA'),(6,'Downton Tabby Hospital','San Francisco, CA'),(7,'Muttropolitan Veterinary Hospital','San Francisco, CA'),(8,'Purrfect Animal Care','San Francisco, CA'),(9,'Pampurr Care Center','San Francisco, CA'),(10,'Johns Pupkins','San Francisco, CA');
/*!40000 ALTER TABLE `Hospitals` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `Maladies` WRITE;
/*!40000 ALTER TABLE `Maladies` DISABLE KEYS */;
INSERT INTO `Maladies` VALUES (1,'Excessive Cuteness'),(2,'Kiss-aholic'),(3,'Major Puppy Eyes'),(4,'Sudden Floofiness'),(5,'Restless Tail Syndrome'),(6,'Obsessive Compulsive Cuddling'),(7,'Small Dog Syndrome'),(8,'Plushie Addiction'),(9,'Attention Seeking Behavior'),(10,'Spoiled');
/*!40000 ALTER TABLE `Maladies` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `Owners` WRITE;
/*!40000 ALTER TABLE `Owners` DISABLE KEYS */;
INSERT INTO `Owners` VALUES (1,'Martin Bresso'),(2,'Dillon Francis'),(3,'Chris Lake'),(4,'Sonny Moore'),(5,'Eric Prydz'),(6,'Brookes Brothers'),(7,'Danny Byrd'),(8,'Idris Elba'),(9,'Thomas Wesley Pentz'),(10,'Funk LeBlanc');
/*!40000 ALTER TABLE `Owners` ENABLE KEYS */;
UNLOCK TABLES;
