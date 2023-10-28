import { registerBlockType } from '@wordpress/blocks';

import './style.scss';
import './editor.scss';

registerBlockType('explore-block/text-box', {
	edit() {
		return 'Hello Editor';
	},
	save() {
		return 'Hello Frontend';
	},
});
