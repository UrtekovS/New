/*
   14 января 2021 г.10:14:34
   Пользователь: 
   Сервер: SALAMON-5X
   База данных: Cards
   Приложение: 
*/

/* Чтобы предотвратить возможность потери данных, необходимо внимательно просмотреть этот скрипт, прежде чем запускать его вне контекста конструктора баз данных.*/
BEGIN TRANSACTION
SET QUOTED_IDENTIFIER ON
SET ARITHABORT ON
SET NUMERIC_ROUNDABORT OFF
SET CONCAT_NULL_YIELDS_NULL ON
SET ANSI_NULLS ON
SET ANSI_PADDING ON
SET ANSI_WARNINGS ON
COMMIT
BEGIN TRANSACTION
GO
CREATE TABLE dbo.Tmp_Cards
	(
	id int NOT NULL IDENTITY (1, 1),
	card nchar(10) NOT NULL,
	dignity int NOT NULL,
	quantity int NOT NULL
	)  ON [PRIMARY]
GO
ALTER TABLE dbo.Tmp_Cards SET (LOCK_ESCALATION = TABLE)
GO
SET IDENTITY_INSERT dbo.Tmp_Cards ON
GO
IF EXISTS(SELECT * FROM dbo.Cards)
	 EXEC('INSERT INTO dbo.Tmp_Cards (id, card, dignity, quantity)
		SELECT id, CONVERT(nchar(10), meanind), CONVERT(int, cuit), quantity FROM dbo.Cards WITH (HOLDLOCK TABLOCKX)')
GO
SET IDENTITY_INSERT dbo.Tmp_Cards OFF
GO
DROP TABLE dbo.Cards
GO
EXECUTE sp_rename N'dbo.Tmp_Cards', N'Cards', 'OBJECT' 
GO
COMMIT
select Has_Perms_By_Name(N'dbo.Cards', 'Object', 'ALTER') as ALT_Per, Has_Perms_By_Name(N'dbo.Cards', 'Object', 'VIEW DEFINITION') as View_def_Per, Has_Perms_By_Name(N'dbo.Cards', 'Object', 'CONTROL') as Contr_Per 