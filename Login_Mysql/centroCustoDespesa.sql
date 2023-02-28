# MySQL-Front Dump 2.5
#
# Host: localhost   Database: casaEmbalagem23012023
# --------------------------------------------------------
# Server version 4.0.27-nt-log

#
# Table structure for table 'centrocusto'
#

CREATE TABLE centrocusto (
  codigo mediumint(9) unsigned NOT NULL default '0',
  descricao char(80) default '0',
  ativo tinyint(1) unsigned default '0',
  PRIMARY KEY  (codigo),
  KEY Codigo (codigo)
) TYPE=MyISAM ROW_FORMAT=FIXED;



#
# Table structure for table 'despesa'
#

CREATE TABLE despesa (
  codigo mediumint(9) NOT NULL auto_increment,
  descricao char(50) default '0',
  codcentro char(10) default NULL,
  valor double default '0',
  unidade char(2) default NULL,
  ativo tinyint(1) unsigned default '0',
  tipoDespesa int(3) unsigned NOT NULL default '0',
  custoProducao int(2) unsigned NOT NULL default '0',
  PRIMARY KEY  (codigo),
  KEY codigo (codigo,descricao)
) TYPE=MyISAM ROW_FORMAT=FIXED;

