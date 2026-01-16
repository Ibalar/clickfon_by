<?php
/* Smarty version 5.4.2, created on 2025-11-14 16:28:16
  from 'file:tinymce_init.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69172e7011ee28_35313059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a81a02c921ff86d71ffa456276dddaebd790c4a' => 
    array (
      0 => 'tinymce_init.tpl',
      1 => 1722379242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69172e7011ee28_35313059 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
echo '<script'; ?>
 src="/turbo/design/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$(function() {
		const fetchApi = import("https://unpkg.com/@microsoft/fetch-event-source@2.0.1/lib/esm/index.js").then(module => module.fetchEventSource);
		const api_key = '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->gpt_key, ENT_QUOTES, 'UTF-8', true);?>
';
		tinyMCE.init({
		selector: "textarea.editor",
			license_key: 'gpl',
			<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
				skin: "oxide-dark",
				content_css: "dark",
			<?php }?>
			min_height: 570,
			promotion: false,
			branding: false,
			plugins: [
				'advlist', 'ai', 'autolink', 'lists', 'link', 'image', 'editimage', 'charmap', 'preview', 'responsivefilemanager',
				'anchor', 'searchreplace', 'visualblocks', 'fullscreen', 'advcode',
				'insertdatetime', 'media', 'table', 'help', 'wordcount', 'emoticons', 'quickbars', 'save'
			],
			editimage_cors_hosts: ['picsum.photos'],
			toolbar_items_size: 'small',
			menubar: 'file edit insert view format table tools',
			toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | forecolor backcolor emoticons | link unlink  media image | removeformat preview fullscreen code translate | aidialog aishortcuts',
			quickbars_insert_toolbar: false,
			quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote image quicktable',
			
				image_class_list: [
					{title: 'None', value: ''},
					{title: 'img-fluid', value: 'img-fluid'},
					{title: 'image-zoom', value: 'img-zoom img-fluid'},
					{title: 'image-slider', value: 'img-slider img-fluid'},
					{title: 'image-gallery', value: 'img-gallery img-fluid'},
					{title: 'image-style', value: 'image-style img-fluid'}
				],
			
			font_formats: "Andale Mono=andale mono,times;" +
			"Arial=arial,helvetica,sans-serif;" +
			"Arial Black=arial black,avant garde;" +
			"Book Antiqua=book antiqua,palatino;" +
			"Comic Sans MS=comic sans ms,sans-serif;" +
			"Courier New=courier new,courier;" +
			"Georgia=georgia,palatino;" +
			"Helvetica=helvetica;" +
			"Impact=impact,chicago;" +
			"Symbol=symbol;" +
			"Tahoma=tahoma,arial,helvetica,sans-serif;" +
			"Terminal=terminal,monaco;" +
			"Times New Roman=times new roman,times;" +
			"Trebuchet MS=trebuchet ms,geneva;" +
			"Verdana=verdana,geneva;" +
			"Webdings=webdings;" +
			"Wingdings=wingdings,zapf dingbats",
			image_advtab: true,
			image_caption: true,
			external_filemanager_path: "/turbo/design/js/filemanager/",
			filemanager_title:"<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->tinymce_init_filemanager, ENT_QUOTES, 'UTF-8', true);?>
" ,
			external_plugins: { "filemanager": "/turbo/design/js/filemanager/plugin.min.js" },
			save_enablewhendirty: true,
			save_onsavecallback: function() {
			$("[type='submit']").trigger("click");
			},
			language : "<?php if ($_smarty_tpl->getValue('settings')->lang == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('settings')->lang;
}?>",
				setup: function(editor) {
					<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('FAQAdmin','DeliveryAdmin','PaymentMethodAdmin'))) {?>	
						editor.on('keyup change', (function() {
							set_meta();
						}));
					<?php }?>
					editor.ui.registry.addButton('translate', {
						icon: 'translate',
						tooltip: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
',
						onAction: function() {
							var targetLang = '<?php if ($_smarty_tpl->getValue('lang_label') == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('lang_label');
}?>';
							var content = editor.getContent();
		
							if (content.trim() !== '') {
								$.post('ajax/translate.php', {
									'source_lang': 'auto',
									'target_lang': targetLang,
									'text': content
								}, function(data) {
									editor.setContent(data);
									set_meta();
								});
							}
						}
					});
			},
			
				ai_request: (request, respondWith) => {
					respondWith.stream((signal, streamMessage) => {
						// Adds each previous query and response as individual messages
						const conversation = request.thread.flatMap((event) => {
							if (event.response) {
								return [
									{ role: 'user', content: event.request.query },
									{ role: 'assistant', content: event.response.data }
								];
							} else {
								return [];
							}
						});

						// System messages provided by the plugin to format the output as HTML content.
						const pluginSystemMessages = request.system.map((content) => ({
							role: 'system',
							content
						}));

						const systemMessages = [
							...pluginSystemMessages,
							// Additional system messages to control the output of the AI
							{ role: 'system', content: 'Do not include html\`\`\` at the start or \`\`\` at the end.' },
							{ role: 'system', content: 'No explanation or boilerplate, just give the HTML response.' }
						];

						// Forms the new query sent to the API
						const content = request.context.length === 0 || conversation.length > 0 ?
							request.query
						: `Question: ${request.query} Context: """${request.context}"""`;

						const messages = [
							...conversation,
							...systemMessages,
							{ role: 'user', content }
						];

						const requestBody = {
							model: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->model, ENT_QUOTES, 'UTF-8', true);?>
',
							temperature: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->temperature, ENT_QUOTES, 'UTF-8', true);?>
,
							max_tokens: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->max_tokens, ENT_QUOTES, 'UTF-8', true);?>
,
							messages,
							stream: true
						};

						const openAiOptions = {
							signal,
							method: 'POST',
							headers: {
								'Content-Type': 'application/json',
								'Authorization': `Bearer ${api_key}`
							},
							body: JSON.stringify(requestBody)
						};

						const onopen = async (response) => {
							if (response) {
								const contentType = response.headers.get('content-type');
								if (response.ok && contentType?.includes('text/event-stream')) {
									return;
								} else if (contentType?.includes('application/json')) {
									const data = await response.json();
									if (data.error) {
										throw new Error(`${data.error.type}: ${data.error.message}`);
									}
								}
							} else {
								throw new Error('Failed to communicate with the ChatGPT API');
							}
						};

						// This function passes each new message into the plugin via the `streamMessage` callback.
						const onmessage = (ev) => {
							const data = ev.data;
							if (data !== '[DONE]') {
								const parsedData = JSON.parse(data);
								const firstChoice = parsedData?.choices[0];
								const message = firstChoice?.delta?.content;
								if (message) {
									streamMessage(message);
								}
							}
						};

						const onerror = (error) => {
							// Stop operation and do not retry by the fetch-event-source
							throw error;
						};

						// Use microsoft's fetch-event-source library to work around the 2000 character limit
					// of the browser `EventSource` API, which requires query strings
					return fetchApi
						.then(fetchEventSource =>
							fetchEventSource('https://api.openai.com/v1/chat/completions', {
								...openAiOptions,
								openWhenHidden: true,
								onopen,
								onmessage,
								onerror
							})
						)
						.then(async (response) => {
							if (response && !response.ok) {
								const data = await response.json();
								if (data.error) {
									throw new Error(`${data.error.type}: ${data.error.message}`);
								}
							}
						})
						.catch(onerror);
				});
			},
			ai_shortcuts: [
				{ title: 'Summarize content', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->summarize_content, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
				{ title: 'Improve writing', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->improve_writing, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
				{ title: 'Simplify language', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->simplify_language, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
				{ title: 'Expand upon', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->expand_upon, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
				{ title: 'Trim content', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->trim_content, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
				{
					title: 'Change tone',
					subprompts: [
						{ title: 'Professional', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_professional, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
						{ title: 'Casual', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_casual, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
						{ title: 'Direct', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_direct, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
						{ title: 'Confident', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_confident, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
						{ title: 'Friendly', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_friendly, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
					]
				},
				{
					title: 'Change style',
					subprompts: [
						{ title: 'Business', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_business, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
						{ title: 'Legal', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_legal, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
						{ title: 'Journalism', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_journalism, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
						{ title: 'Medical', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_medical, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
						{ title: 'Poetic', prompt: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->prompt_poetic, ENT_QUOTES, 'UTF-8', true);?>
', selection: true },
						]
					}
				]
		
		});
	});
<?php echo '</script'; ?>
><?php }
}
