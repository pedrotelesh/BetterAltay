<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol\types;

class StructureEditorData{
	public const TYPE_DATA = 0;
	public const TYPE_SAVE = 1;
	public const TYPE_LOAD = 2;
	public const TYPE_CORNER = 3;
	public const TYPE_INVALID = 4;
	public const TYPE_EXPORT = 5;

	public string $structureName;
	public string $filterdStructureName;
	public string $structureDataField;
	public bool $includePlayers;
	public bool $showBoundingBox;
	public int $structureBlockType;
	public StructureSettings $structureSettings;
	public int $structureRedstoneSaveMove;
<<<<<<< HEAD
}
=======
}
>>>>>>> e6b31768b1cb36eefe8387f5634d72a821eeefeb
