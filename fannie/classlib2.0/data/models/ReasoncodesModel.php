<?php
/*******************************************************************************

    Copyright 2013 Whole Foods Co-op

    This file is part of Fannie.

    IT CORE is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    IT CORE is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    in the file license.txt along with IT CORE; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*********************************************************************************/

/**
  @class ReasoncodesModel
*/
class ReasoncodesModel extends BasicModel {

	protected $name = "reasoncodes";

	protected $preferred_db = 'op';

	protected $columns = array(
	'textStr' => array('type'=>'VARCHAR(100)'),
	'mask' => array('type'=>'INT','primary_key'=>True,'default'=>0)
	);

	/* START ACCESSOR FUNCTIONS */

	public function textStr(){
		if(func_num_args() == 0){
			if(isset($this->instance["textStr"]))
				return $this->instance["textStr"];
			elseif(isset($this->columns["textStr"]["default"]))
				return $this->columns["textStr"]["default"];
			else return null;
		}
		else{
			$this->instance["textStr"] = func_get_arg(0);
		}
	}

	public function mask(){
		if(func_num_args() == 0){
			if(isset($this->instance["mask"]))
				return (int)$this->instance["mask"];
			elseif(isset($this->columns["mask"]["default"]))
				return (int)$this->columns["mask"]["default"];
			else return null;
		}
		else{
			$this->instance["mask"] = func_get_arg(0);
		}
	}
	/* END ACCESSOR FUNCTIONS */
}
?>
