-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour school
CREATE DATABASE IF NOT EXISTS `school` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `school`;

-- Listage des données de la table school.anneeacademiques : ~4 rows (environ)
/*!40000 ALTER TABLE `anneeacademiques` DISABLE KEYS */;
INSERT INTO `anneeacademiques` (`id`, `code_ac`, `date_deb`, `date_fin`, `Statut_ac`, `created_at`, `updated_at`) VALUES
	(1, '2022-2023', '2022', '2023', 0, '2023-02-15 09:08:08', '2023-02-15 10:05:58'),
	(2, '2023-2024', '2023-02-15', '2024', 0, '2023-02-15 08:13:43', '2023-02-15 08:13:43'),
	(3, '2021-2022', '08-11-2021', '2022', 0, '2023-02-15 08:23:35', '2023-02-15 09:42:30'),
	(4, '2020-2021', '08-11-2020', '2021', 1, '2023-02-15 08:23:35', '2023-02-15 10:05:58');
/*!40000 ALTER TABLE `anneeacademiques` ENABLE KEYS */;

-- Listage des données de la table school.classes : ~4 rows (environ)
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` (`id`, `libelle_classe`, `scolarite`, `tranche1`, `tranche2`, `tranche3`, `id_cycle`, `created_at`, `updated_at`) VALUES
	(1, '6 EME', 500000, 200000, 150000, 150000, 1, '2023-02-15 08:23:35', '2023-02-15 08:23:35'),
	(2, '5 EME', 500000, 200000, 150000, 150000, 1, '2023-02-15 08:23:35', '2023-02-15 08:23:35'),
	(3, '4 EME', 500000, 200000, 150000, 150000, 1, '2023-02-15 08:23:35', '2023-02-15 08:23:35'),
	(4, '1 ere', 275000, 100000, 100000, 75000, 2, '2023-02-15 08:27:31', '2023-02-15 08:27:31'),
	(5, 'Seconde', 255000, 100000, 75000, 80000, 2, '2023-02-15 08:29:10', '2023-02-15 08:29:10');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;

-- Listage des données de la table school.coefficients : ~0 rows (environ)
/*!40000 ALTER TABLE `coefficients` DISABLE KEYS */;
/*!40000 ALTER TABLE `coefficients` ENABLE KEYS */;

-- Listage des données de la table school.compositions : ~0 rows (environ)
/*!40000 ALTER TABLE `compositions` DISABLE KEYS */;
/*!40000 ALTER TABLE `compositions` ENABLE KEYS */;

-- Listage des données de la table school.cycles : ~2 rows (environ)
/*!40000 ALTER TABLE `cycles` DISABLE KEYS */;
INSERT INTO `cycles` (`id`, `code_cycle`, `libelle_cycle`, `created_at`, `updated_at`) VALUES
	(1, 'Cy1', 'Cycle 1', '2023-02-15 08:23:35', '2023-02-15 08:23:35'),
	(2, 'Cy2', 'Cycle 2', '2023-02-15 08:23:35', '2023-02-15 08:23:35');
/*!40000 ALTER TABLE `cycles` ENABLE KEYS */;

-- Listage des données de la table school.ecoles : ~0 rows (environ)
/*!40000 ALTER TABLE `ecoles` DISABLE KEYS */;
/*!40000 ALTER TABLE `ecoles` ENABLE KEYS */;

-- Listage des données de la table school.eleves : ~4 rows (environ)
/*!40000 ALTER TABLE `eleves` DISABLE KEYS */;
INSERT INTO `eleves` (`id`, `prenom_eleve`, `nom_eleve`, `date_nais`, `lieu_naiss`, `adresse`, `noms_parent`, `contact_parent`, `photo`, `id_sexe`, `created_at`, `updated_at`) VALUES
	(1, 'ABOUCHA', 'ULRICH', '28-11-1994', 'cotonou', 'AGONTIKON', 'chaebelo viviane', '07854566555', NULL, 1, '2023-02-15 08:24:11', '2023-02-15 08:24:11'),
	(2, 'DUMAS', 'steve', '19-12-1997', 'france', '21 rue voltaire', 'dumas xavier', '85471254', NULL, 1, '2023-02-15 08:24:43', '2023-02-15 08:24:43'),
	(3, 'Brunette', 'Véronique', '19-12-1997', 'france', '55000', 'zojdo papa', '+22998745214', NULL, 2, '2023-02-15 08:25:10', '2023-02-15 08:25:10'),
	(4, 'KEMAL', 'TOKPO', '28-10-1994', 'france', 'COCOTOMEY', 'TOKPO DAH', 'TOKPO MERE', NULL, 1, '2023-02-15 08:26:26', '2023-02-15 08:26:26'),
	(5, 'Naël Lénaïc setondji', 'GLELE ABOUCHA', '25-11-2022', 'cotonou', 'C/1108 AGONTINKON COTONOU', 'GLELE ABOUCHA Ulrich', '96833064', NULL, 1, '2023-02-15 09:51:33', '2023-02-15 09:51:33'),
	(6, 'Brunette', 'Charbelo', '19-12-1997', 'cotonou', '21 rue voltaire', 'GLELE ABOUCHA Ulrich', '85471254', NULL, 1, '2023-02-16 16:42:02', '2023-02-16 16:42:02');
/*!40000 ALTER TABLE `eleves` ENABLE KEYS */;

-- Listage des données de la table school.emploies : ~0 rows (environ)
/*!40000 ALTER TABLE `emploies` DISABLE KEYS */;
/*!40000 ALTER TABLE `emploies` ENABLE KEYS */;

-- Listage des données de la table school.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage des données de la table school.inscriptions : ~9 rows (environ)
/*!40000 ALTER TABLE `inscriptions` DISABLE KEYS */;
INSERT INTO `inscriptions` (`id`, `mat_eleve`, `prenom_eleve`, `nom_eleve`, `id_eleve`, `id_annee`, `code_cycle`, `code_classe`, `created_at`, `updated_at`) VALUES
	(1, 'MAT-00000000001', 'ABOUCHA', 'ULRICH', 1, 3, 1, 3, '2023-02-15 08:27:00', '2023-02-15 08:27:00'),
	(2, 'MAT-00000000002', 'DUMAS', 'steve', 2, 3, 2, 5, '2023-02-15 08:29:28', '2023-02-15 09:34:57'),
	(3, 'MAT-00000000003', 'Brunette', 'Véronique', 3, 3, 1, 3, '2023-02-15 08:30:02', '2023-02-15 08:30:02'),
	(4, 'MAT-00000000004', 'KEMAL', 'TOKPO', 4, 3, 2, 4, '2023-02-15 08:30:11', '2023-02-15 08:30:11'),
	(6, 'MAT-00000000005', 'Naël Lénaïc setondji', 'GLELE ABOUCHA', 5, 1, 1, 1, '2023-02-15 10:01:29', '2023-02-15 10:01:29'),
	(7, 'MAT-00000000006', 'ABOUCHA', 'ULRICH', 1, 4, 1, 3, '2023-02-15 10:13:46', '2023-02-15 10:13:46'),
	(8, 'MAT-00000000007', 'Brunette', 'Véronique', 3, 4, 1, 1, '2023-02-15 10:14:41', '2023-02-15 10:14:41'),
	(15, 'MAT-00000000005', 'Naël Lénaïc setondji', 'GLELE ABOUCHA', 5, 4, 1, 1, '2023-02-15 10:51:06', '2023-02-15 10:51:06'),
	(18, 'MAT-00000000004', 'KEMAL', 'TOKPO', 4, 4, 1, 1, '2023-02-16 13:06:32', '2023-02-16 13:06:32'),
	(21, 'MAT-00000000008', 'Brunette', 'Charbelo', 6, 4, 2, 4, '2023-02-16 16:54:23', '2023-02-16 16:54:23');
/*!40000 ALTER TABLE `inscriptions` ENABLE KEYS */;

-- Listage des données de la table school.matieres : ~5 rows (environ)
/*!40000 ALTER TABLE `matieres` DISABLE KEYS */;
INSERT INTO `matieres` (`id`, `nom_matiere`, `created_at`, `updated_at`) VALUES
	(1, 'Français', '2023-02-15 08:23:35', '2023-02-15 08:23:35'),
	(2, 'Anglais', '2023-02-15 08:23:35', '2023-02-15 08:23:35'),
	(3, 'Mathématique', '2023-02-15 08:23:35', '2023-02-15 08:23:35'),
	(4, 'EPS', '2023-02-15 08:23:35', '2023-02-15 08:23:35'),
	(5, 'Histoire-Géographie', '2023-02-15 08:23:35', '2023-02-15 08:23:35');
/*!40000 ALTER TABLE `matieres` ENABLE KEYS */;

-- Listage des données de la table school.migrations : ~18 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_11_18_085717_create_sexes_table', 1),
	(6, '2022_10_19_160545_create_ecoles_table', 1),
	(7, '2022_10_19_160624_create_anneeacademiques_table', 1),
	(8, '2022_10_19_160625_create_cycles_table', 1),
	(9, '2022_10_19_160626_create_trimestres_table', 1),
	(10, '2022_10_19_160844_create_matieres_table', 1),
	(11, '2022_10_19_161014_create_eleves_table', 1),
	(12, '2022_10_19_161153_create_classes_table', 1),
	(13, '2022_10_19_161238_create_inscriptions_table', 1),
	(14, '2022_10_19_161331_create_notes_table', 1),
	(15, '2022_10_19_161611_create_compositions_table', 1),
	(16, '2022_11_16_080942_create_coefficients_table', 1),
	(17, '2022_11_16_101503_create_payements_table', 1),
	(18, '2022_11_16_103844_create_professeurs_table', 1),
	(19, '2022_11_16_115154_create_emploies_table', 1),
	(20, '2023_01_05_103723_create_scolarites_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage des données de la table school.notes : ~0 rows (environ)
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;

-- Listage des données de la table school.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage des données de la table school.payements : ~0 rows (environ)
/*!40000 ALTER TABLE `payements` DISABLE KEYS */;
/*!40000 ALTER TABLE `payements` ENABLE KEYS */;

-- Listage des données de la table school.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage des données de la table school.professeurs : ~0 rows (environ)
/*!40000 ALTER TABLE `professeurs` DISABLE KEYS */;
INSERT INTO `professeurs` (`id`, `nom_prof`, `prenom_prof`, `datenais_prof`, `adresse`, `sexe`, `telephone`, `salaire`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'Prodjinotho', 'juste rene', '10-11-1994', 'AGONTIKON', '1', '97857474', 1400000, '1676449285.jpg', '2023-02-15 08:21:25', '2023-02-15 08:21:25');
/*!40000 ALTER TABLE `professeurs` ENABLE KEYS */;

-- Listage des données de la table school.scolarites : ~0 rows (environ)
/*!40000 ALTER TABLE `scolarites` DISABLE KEYS */;
/*!40000 ALTER TABLE `scolarites` ENABLE KEYS */;

-- Listage des données de la table school.sexes : ~2 rows (environ)
/*!40000 ALTER TABLE `sexes` DISABLE KEYS */;
INSERT INTO `sexes` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
	(1, 'Masculin', '2023-02-15 08:23:36', '2023-02-15 08:23:36'),
	(2, 'Féminin', '2023-02-15 08:23:36', '2023-02-15 08:23:36');
/*!40000 ALTER TABLE `sexes` ENABLE KEYS */;

-- Listage des données de la table school.trimestres : ~2 rows (environ)
/*!40000 ALTER TABLE `trimestres` DISABLE KEYS */;
INSERT INTO `trimestres` (`id`, `code_trim`, `libel_trim`, `date_debut`, `date_fin`, `id_annee`, `created_at`, `updated_at`) VALUES
	(1, '1t', 'PREMIER TRIMESTRE', '2021-07-15', '2021-10-15', 1, '2023-02-15 08:23:35', '2023-02-15 08:23:35'),
	(2, '2t', 'DEUXIEME TRIMESTRE', '2021-10-15', '2021-12-15', 1, '2023-02-15 08:23:35', '2023-02-15 08:23:35');
/*!40000 ALTER TABLE `trimestres` ENABLE KEYS */;

-- Listage des données de la table school.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'ULRICH CARNOL YETONDJI GLELE ABOUCHA', 'gleleulrich@gmail.com', NULL, '$2y$10$MZj8.hvvsr5UeBFhvJg8E.fUHlBHJ4iLtbQF1BiYxi.vS0wudFdEa', NULL, '2023-02-15 08:05:33', '2023-02-15 08:05:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
