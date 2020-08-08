/**
Author : Berrand BOUGÉ sm
Contact : bertrand.bouge@formateurs-microsoft.com
CreateTime : 2020/08/08
ModifyTime : 2020/08/08
Description : Ce programme vise à construire de manière 
automatique des batiements qui vont recevoir les 
descrptions des différents chapitres de cours

Version 0.1 2020/08/08
- Creation du fichier
- Mise en place du squelette de l'aide
**/

class block_materiau {
	constructor(m){
		this.materiau=m;
	}
}

b_sol = new block_materiau(Block.cactus);
b_mur = new block_materiau(Block.cactus);
b_escalier = new block_materiau(Block.glay);
b_vitre = new block_materiau(Block.glass_pane);
b_toit = new block_materiau(Block.chiseled_stone_bricks)