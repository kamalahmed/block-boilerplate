import { registerBlockType } from '@wordpress/blocks';

import './style.scss';
import './editor.scss';

registerBlockType( 'kamal/block-boilerplate', {
	edit() {
		return 'Hello Editor';
	},
	save() {
		return 'Hello Frontend';
	},
} );
