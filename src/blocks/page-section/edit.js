import { __ } from '@wordpress/i18n';
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

export default function Edit() {
	return (
		<section { ...useBlockProps() }>
			<InnerBlocks />
		</section>
	);
}
