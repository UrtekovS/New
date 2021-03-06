/*
   14 января 2021 г.9:36:51
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
CREATE TABLE dbo.Tmp_picture
	(
	id_picture int NOT NULL IDENTITY (1, 1),
	jack nchar(10) NULL,
	lady nchar(10) NULL,
	king nchar(10) NULL,
	ace nchar(10) NULL,
	[1] nchar(10) NULL,
	[6] nchar(10) NULL,
	[7] nchar(10) NULL,
	[8] nchar(10) NULL,
	[9] nchar(10) NULL,
	[10] nchar(10) NULL
	)  ON [PRIMARY]
GO
ALTER TABLE dbo.Tmp_picture SET (LOCK_ESCALATION = TABLE)
GO
SET IDENTITY_INSERT dbo.Tmp_picture ON
GO
IF EXISTS(SELECT * FROM dbo.picture)
	 EXEC('INSERT INTO dbo.Tmp_picture (id_picture, jack, lady, king, ace)
		SELECT id_picture, jack, lady, king, ace FROM dbo.picture WITH (HOLDLOCK TABLOCKX)')
GO
SET IDENTITY_INSERT dbo.Tmp_picture OFF
GO
DROP TABLE dbo.picture
GO
EXECUTE sp_rename N'dbo.Tmp_picture', N'picture', 'OBJECT' 
GO
COMMIT
select Has_Perms_By_Name(N'dbo.picture', 'Object', 'ALTER') as ALT_Per, Has_Perms_By_Name(N'dbo.picture', 'Object', 'VIEW DEFINITION') as View_def_Per, Has_Perms_By_Name(N'dbo.picture', 'Object', 'CONTROL') as Contr_Per 