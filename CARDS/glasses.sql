/*
   14 января 2021 г.9:30:41
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
CREATE TABLE dbo.Tmp_glasses
	(
	id int NOT NULL IDENTITY (1, 1),
	meanind int NOT NULL,
	cuit nchar(10) NOT NULL,
	quantity int NOT NULL
	)  ON [PRIMARY]
GO
ALTER TABLE dbo.Tmp_glasses SET (LOCK_ESCALATION = TABLE)
GO
SET IDENTITY_INSERT dbo.Tmp_glasses ON
GO
IF EXISTS(SELECT * FROM dbo.glasses)
	 EXEC('INSERT INTO dbo.Tmp_glasses (id, meanind, cuit, quantity)
		SELECT id, [2], CONVERT(nchar(10), [3]), [4] FROM dbo.glasses WITH (HOLDLOCK TABLOCKX)')
GO
SET IDENTITY_INSERT dbo.Tmp_glasses OFF
GO
DROP TABLE dbo.glasses
GO
EXECUTE sp_rename N'dbo.Tmp_glasses', N'glasses', 'OBJECT' 
GO
COMMIT
select Has_Perms_By_Name(N'dbo.glasses', 'Object', 'ALTER') as ALT_Per, Has_Perms_By_Name(N'dbo.glasses', 'Object', 'VIEW DEFINITION') as View_def_Per, Has_Perms_By_Name(N'dbo.glasses', 'Object', 'CONTROL') as Contr_Per 