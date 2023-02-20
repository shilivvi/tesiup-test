<section class="managers">
    <div class="managers__container container">
        <div class="managers__grid">
            <div class="managers__col">
                <?php foreach (get_field('text') as $content_item): ?>
                    <h2 class="managers__title title">
                        <?php echo $content_item['title']; ?>
                    </h2>
                    <?php foreach ($content_item['text'] as $text_item): ?>
                        <?php if ($text_item['type'] === 'wrong'): ?>
                            <p class="managers__text managers__text--wrong">
                                <img aria-hidden="true" width="24" height="24" class="managers__icon"
                                     src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzhfMjg4OSkiPgo8cGF0aCBkPSJNMTUuODM0NCAxNi43NDIzQzE1LjU5OTMgMTYuNzQyMyAxNS4zNjQxIDE2LjY1MjcgMTUuMTg1IDE2LjQ3MzFMNy4zOTEwOSA4LjY3OTE5QzcuMDMyNCA4LjMyMDQ5IDcuMDMyNCA3LjczOTA0IDcuMzkxMDkgNy4zODAzNUM3Ljc0OTMzIDcuMDIxNjUgOC4zMzE2OSA3LjAyMTY1IDguNjg5OTMgNy4zODAzNUwxNi40ODQzIDE1LjE3NDdDMTYuODQzIDE1LjUzMzQgMTYuODQzIDE2LjExNDkgMTYuNDg0MyAxNi40NzM2QzE2LjMwNDcgMTYuNjUyNyAxNi4wNjk2IDE2Ljc0MjMgMTUuODM0NCAxNi43NDIzWiIgZmlsbD0iI0VCMDAxQiIvPgo8cGF0aCBkPSJNOC4wNDA1MSAxNi43NDI3QzcuODA1MzYgMTYuNzQyNyA3LjU3MDIxIDE2LjY1MzIgNy4zOTEwOSAxNi40NzM2QzcuMDMyNCAxNi4xMTQ5IDcuMDMyNCAxNS41MzM0IDcuMzkxMDkgMTUuMTc0N0wxNS4xODU1IDcuMzgwMzVDMTUuNTQzNyA3LjAyMTY1IDE2LjEyNjEgNy4wMjE2NSAxNi40ODQzIDcuMzgwMzVDMTYuODQzIDcuNzM5MDQgMTYuODQzIDguMzIwNDkgMTYuNDg0MyA4LjY3OTE4TDguNjg5OTMgMTYuNDczNkM4LjUxMDgxIDE2LjY1MzIgOC4yNzUyIDE2Ljc0MjcgOC4wNDA1MSAxNi43NDI3WiIgZmlsbD0iI0VCMDAxQiIvPgo8cGF0aCBkPSJNMTEuOTA3MyAyMy44NjQ1QzExLjkwNjggMjMuODY0NSAxMS45MDY4IDIzLjg2NDUgMTEuOTA3MyAyMy44NjQ1QzEwLjg2MjQgMjMuODY0NSA5LjgyNjczIDIzLjcyODEgOC44Mjg3MiAyMy40NTk5QzQuNTI4MDYgMjIuMzAzNCAxLjE2MDE4IDE4Ljc0MDMgMC4yNDg5NzEgMTQuMzgzMkMtMC42NzkyMjggOS45NDQyNyAxLjAzNDMzIDUuMjc4MDEgNC42MTQ0IDIuNDk1MjVDNi42ODM0NCAwLjg4NjQwNSA5LjI5MzUxIDAgMTEuOTYzNyAwQzEzLjgxMjMgMCAxNS42NDg1IDAuNDI5ODgzIDE3LjI3MzQgMS4yNDIzNEMyMS4yODYyIDMuMjQ5ODQgMjMuODc4OCA3LjQ0Mzk2IDIzLjg3ODggMTEuOTI3OUMyMy44Nzg4IDE1LjU4NjUgMjIuMTUyMyAxOS4xMTI4IDE5LjI2MDMgMjEuMzYwNUMxNy4xODM5IDIyLjk3NTMgMTQuNTcyIDIzLjg2NDUgMTEuOTA3MyAyMy44NjQ1Wk0xMS45NjQyIDEuODM3MTFDOS43MDA0MyAxLjgzNzExIDcuNDkwODUgMi41ODYxOSA1Ljc0MjM4IDMuOTQ1NjVDMi43MTIwNyA2LjMwMDgyIDEuMjYxNjggMTAuMjUwMSAyLjA0NzUgMTQuMDA3QzIuODE4NjMgMTcuNjkyNyA1LjY2NzUyIDIwLjcwNyA5LjMwNTkxIDIxLjY4NTdDMTAuMTQ4MiAyMS45MTI2IDExLjAyMzYgMjIuMDI3NCAxMS45MDY4IDIyLjAyNzRDMTQuMTY1NSAyMi4wMjc0IDE2LjM3NjkgMjEuMjc1NSAxOC4xMzMyIDE5LjkxMDFDMjAuNTgwMiAxOC4wMDczIDIyLjA0MTcgMTUuMDIzNCAyMi4wNDE3IDExLjkyNzlDMjIuMDQxNyA4LjEzMzM0IDE5Ljg0NzcgNC41ODQ1IDE2LjQ1MTggMi44ODU2NEMxNS4wODA5IDIuMTk5OTQgMTMuNTI5IDEuODM3MTEgMTEuOTY0MiAxLjgzNzExWiIgZmlsbD0iI0VCMDAxQiIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzhfMjg4OSI+CjxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0id2hpdGUiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K"/>
                                <?php echo $text_item['text']; ?>
                            </p>
                        <?php elseif ($text_item['type'] === 'right'): ?>
                            <p class="managers__text managers__text--right">
                                <img aria-hidden="true" width="24" height="24" class="managers__icon" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzhfMjg4NSkiPgo8cGF0aCBkPSJNMTEuOTgwMiAyMy4wMjU1QzcuNzc3NzUgMjMuMDI1OSAzLjkwMjQ3IDIwLjYxNzkgMi4wNDY0NCAxNi44Mjc1QzAuMTY4Mjk3IDEyLjk5MSAwLjczNjk2NiA4LjIwNjEyIDMuNDYyMTUgNC45MjExOUM2LjE4NDM4IDEuNjM5NjYgMTAuNjEgMC4yMDc3ODUgMTQuNzM2MSAxLjI3MzNDMTUuMTkwNSAxLjM5MDYgMTUuNDYzNyAxLjg1NDI5IDE1LjM0NjggMi4zMDkwNUMxNS4yMjk1IDIuNzYzODIgMTQuNzY1NCAzLjAzNjY4IDE0LjMxMTEgMi45MTk4QzEwLjgyMDggMi4wMTgzNCA3LjA3NDc4IDMuMjI5NjQgNC43NzA3OCA2LjAwNzFDMi40NjU1IDguNzg2MjcgMS45ODQzOSAxMi44MzQ1IDMuNTczNTEgMTYuMDgwOEM1LjE1NjY5IDE5LjMxNDMgOC42NDkwMiAyMS40MjA3IDEyLjIzMzYgMjEuMzIyOUMxNS44MTc3IDIxLjIyNTIgMTkuMDcwNCAxOS4wNDUyIDIwLjUyMDEgMTUuNzY5NkMyMS4zNzE0IDEzLjg0NiAyMS41NTE2IDExLjY2NzggMjEuMDI2NyA5LjYzNTg3QzIwLjkwOTQgOS4xODE1MyAyMS4xODI3IDguNzE3ODQgMjEuNjM3NCA4LjYwMDEyQzIyLjA5MDkgOC40ODIzOCAyMi41NTU1IDguNzU2MDkgMjIuNjczMiA5LjIxMDg2QzIzLjI5MjkgMTEuNjExNyAyMy4wODA4IDE0LjE4NTYgMjIuMDc1MiAxNi40NTc4QzIwLjM2MTYgMjAuMzI5NiAxNi41MTY1IDIyLjkwNjUgMTIuMjgwNCAyMy4wMjIxQzEyLjE4IDIzLjAyNDIgMTIuMDc5NyAyMy4wMjU1IDExLjk4MDIgMjMuMDI1NVoiIGZpbGw9IiMxNEE4MDAiLz4KPHBhdGggZD0iTTExLjk3MzIgMTQuNjI1OEMxMS43NTU1IDE0LjYyNTggMTEuNTM3OSAxNC41NDMgMTEuMzcyMiAxNC4zNzY4QzExLjA0MDIgMTQuMDQ0OSAxMS4wNDAyIDEzLjUwNjggMTEuMzcyMiAxMy4xNzQ5TDIxLjU3MjUgMi45NzQ1M0MyMS45MDQgMi42NDI2IDIyLjQ0MjkgMi42NDI2IDIyLjc3NDUgMi45NzQ1M0MyMy4xMDY0IDMuMzA2NDggMjMuMTA2NCAzLjg0NDUzIDIyLjc3NDUgNC4xNzY0OEwxMi41NzQxIDE0LjM3NjhDMTIuNDA4MyAxNC41NDI2IDEyLjE5MDggMTQuNjI1OCAxMS45NzMyIDE0LjYyNThaIiBmaWxsPSIjMTRBODAwIi8+CjxwYXRoIGQ9Ik0xMS45NzMyIDE0LjYyNkMxMS43NTU2IDE0LjYyNiAxMS41MzggMTQuNTQzMSAxMS4zNzIzIDE0LjM3N0w3Ljc2NjAxIDEwLjc3MDdDNy40MzQwOCAxMC40Mzg4IDcuNDM0MDggOS45MDA3MSA3Ljc2NjAxIDkuNTY4NzdDOC4wOTc1MiA5LjIzNjg0IDguNjM2NDQgOS4yMzY4NCA4Ljk2Nzk1IDkuNTY4NzdMMTIuNTc0MiAxMy4xNzVDMTIuOTA2MSAxMy41MDcgMTIuOTA2MSAxNC4wNDUgMTIuNTc0MiAxNC4zNzdDMTIuNDA4NCAxNC41NDI3IDEyLjE5MDggMTQuNjI2IDExLjk3MzIgMTQuNjI2WiIgZmlsbD0iIzE0QTgwMCIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzhfMjg4NSI+CjxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0id2hpdGUiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K"/>
                                <?php echo $text_item['text']; ?>
                            </p>
                        <?php else: ?>
                            <p class="managers__text">
                                <?php echo $text_item['text']; ?>
                            </p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
            <div class="managers__col managers__col--sidebar managers-sidebar">
                <h3 class="managers-sidebar__title">I nostri Responsabili dei Clienti</h3>
                <?php if (!empty(get_field('managers'))): ?>
                    <div id="managers-slider" class="managers-sidebar__slider">
                        <?php foreach (get_field('managers') as $item): ?>
                            <div class="managers-sidebar__item">
                                <div class="managers-sidebar__img">
                                    <?php
                                    $img_attr = $item['image']['url'] ? 'src=' . $item['image']['url'] : '';
                                    $img_attr .= $item['image']['url'] ? ' src=' . $item['image']['url'] : '';
                                    $img_attr .= $item['image']['width'] ? ' width=' . $item['image']['width'] : '';
                                    $img_attr .= $item['image']['height'] ? ' height=' . $item['image']['height'] : '';
                                    $img_attr .= $item['image']['alt'] ? ' alt=' . $item['image']['alt'] : '';
                                    ?>
                                    <img <?php esc_attr_e($img_attr); ?> loading="lazy">
                                </div>
                                <div class="managers-sidebar__name">
                                    <?php echo $item['name']; ?>
                                </div>
                                <ul class="managers-sidebar__socials list-reset">
                                    <li class="managers-sidebar__social">
                                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>
                                        <a href="https://t.me/<?php echo $item['telegram']; ?>" class="managers-sidebar__link">
                                            <?php echo $item['telegram']; ?>
                                        </a>
                                    </li>
                                    <li class="managers-sidebar__social">
                                        <i class="fab fa-skype" aria-hidden="true"></i>
                                        <a href="skype:<?php echo $item['skype']; ?>" class="managers-sidebar__link">
                                            <?php echo $item['skype']; ?>
                                        </a>
                                    </li>
                                    <li class="managers-sidebar__social">
                                        <i class="fas fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:<?php echo $item['e-mail']; ?>" class="managers-sidebar__link">
                                            <?php echo $item['e-mail']; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>