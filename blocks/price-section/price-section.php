<section class="price">
    <div class="price__container container">
        <h2 class="price__title title">
            <?php the_field('title'); ?>
        </h2>
        <div class="price__grid">
            <div class="price__scroll-wrap">
                <table class="price__price-table table-price">
                    <thead>
                    <tr>
                        <?php foreach (get_field('table')['header'] as $item): ?>
                            <th><?php echo $item['name']; ?></th>
                        <?php endforeach; ?>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach (get_field('table')['body'] as $item): ?>
                            <tr>
                                <td>
                                    <div class="table-price__direction">
                                        <?php echo $item['direction'] ?>
                                    </div>
                                    <?php if(!empty($item['description'])): ?>
                                        <div class="table-price__description">
                                            <?php echo $item['description'] ?>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <?php if(is_numeric($item['price'])): ?>
                                    <td>
                                        <div class="table-price__price">da <span><?php echo $item['price']; ?>€</span> /per pagina</div>
                                    </td>
                                <?php else: ?>
                                    <td>
                                        <div class="table-price__price table-price__price--no-price">
                                            <?php echo $item['price']; ?>
                                        </div>
                                    </td>
                                <?php endif; ?>
                                <td>
                                    <div class="table-price__format">
                                        <?php echo $item['format']; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="price__services price-services">
                <h3 class="price-services__title price-services__title--green title">
                    <?php echo get_field('free')['title']; ?>
                </h3>
                <?php if(!empty(get_field('free')['list'])): ?>
                    <ul class="price-services__list list-reset">
                        <?php foreach (get_field('free')['list'] as $item): ?>
                            <li class="price-services__item">
                                <div class="price-services__icon">
                                    <img width="24" height="24" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzhfMjg4NSkiPgo8cGF0aCBkPSJNMTEuOTgwMiAyMy4wMjU1QzcuNzc3NzUgMjMuMDI1OSAzLjkwMjQ3IDIwLjYxNzkgMi4wNDY0NCAxNi44Mjc1QzAuMTY4Mjk3IDEyLjk5MSAwLjczNjk2NiA4LjIwNjEyIDMuNDYyMTUgNC45MjExOUM2LjE4NDM4IDEuNjM5NjYgMTAuNjEgMC4yMDc3ODUgMTQuNzM2MSAxLjI3MzNDMTUuMTkwNSAxLjM5MDYgMTUuNDYzNyAxLjg1NDI5IDE1LjM0NjggMi4zMDkwNUMxNS4yMjk1IDIuNzYzODIgMTQuNzY1NCAzLjAzNjY4IDE0LjMxMTEgMi45MTk4QzEwLjgyMDggMi4wMTgzNCA3LjA3NDc4IDMuMjI5NjQgNC43NzA3OCA2LjAwNzFDMi40NjU1IDguNzg2MjcgMS45ODQzOSAxMi44MzQ1IDMuNTczNTEgMTYuMDgwOEM1LjE1NjY5IDE5LjMxNDMgOC42NDkwMiAyMS40MjA3IDEyLjIzMzYgMjEuMzIyOUMxNS44MTc3IDIxLjIyNTIgMTkuMDcwNCAxOS4wNDUyIDIwLjUyMDEgMTUuNzY5NkMyMS4zNzE0IDEzLjg0NiAyMS41NTE2IDExLjY2NzggMjEuMDI2NyA5LjYzNTg3QzIwLjkwOTQgOS4xODE1MyAyMS4xODI3IDguNzE3ODQgMjEuNjM3NCA4LjYwMDEyQzIyLjA5MDkgOC40ODIzOCAyMi41NTU1IDguNzU2MDkgMjIuNjczMiA5LjIxMDg2QzIzLjI5MjkgMTEuNjExNyAyMy4wODA4IDE0LjE4NTYgMjIuMDc1MiAxNi40NTc4QzIwLjM2MTYgMjAuMzI5NiAxNi41MTY1IDIyLjkwNjUgMTIuMjgwNCAyMy4wMjIxQzEyLjE4IDIzLjAyNDIgMTIuMDc5NyAyMy4wMjU1IDExLjk4MDIgMjMuMDI1NVoiIGZpbGw9IiMxNEE4MDAiLz4KPHBhdGggZD0iTTExLjk3MzIgMTQuNjI1OEMxMS43NTU1IDE0LjYyNTggMTEuNTM3OSAxNC41NDMgMTEuMzcyMiAxNC4zNzY4QzExLjA0MDIgMTQuMDQ0OSAxMS4wNDAyIDEzLjUwNjggMTEuMzcyMiAxMy4xNzQ5TDIxLjU3MjUgMi45NzQ1M0MyMS45MDQgMi42NDI2IDIyLjQ0MjkgMi42NDI2IDIyLjc3NDUgMi45NzQ1M0MyMy4xMDY0IDMuMzA2NDggMjMuMTA2NCAzLjg0NDUzIDIyLjc3NDUgNC4xNzY0OEwxMi41NzQxIDE0LjM3NjhDMTIuNDA4MyAxNC41NDI2IDEyLjE5MDggMTQuNjI1OCAxMS45NzMyIDE0LjYyNThaIiBmaWxsPSIjMTRBODAwIi8+CjxwYXRoIGQ9Ik0xMS45NzMyIDE0LjYyNkMxMS43NTU2IDE0LjYyNiAxMS41MzggMTQuNTQzMSAxMS4zNzIzIDE0LjM3N0w3Ljc2NjAxIDEwLjc3MDdDNy40MzQwOCAxMC40Mzg4IDcuNDM0MDggOS45MDA3MSA3Ljc2NjAxIDkuNTY4NzdDOC4wOTc1MiA5LjIzNjg0IDguNjM2NDQgOS4yMzY4NCA4Ljk2Nzk1IDkuNTY4NzdMMTIuNTc0MiAxMy4xNzVDMTIuOTA2MSAxMy41MDcgMTIuOTA2MSAxNC4wNDUgMTIuNTc0MiAxNC4zNzdDMTIuNDA4NCAxNC41NDI3IDEyLjE5MDggMTQuNjI2IDExLjk3MzIgMTQuNjI2WiIgZmlsbD0iIzE0QTgwMCIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzhfMjg4NSI+CjxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0id2hpdGUiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K">
                                </div>
                                <p class="price-services__text">
                                    <?php echo $item['text']; ?>
                                </p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <div class="price__grid">
            <div class="price__services price-services">
                <h3 class="price-services__title title">
                    <?php echo get_field('services')['title']; ?>
                </h3>
                <p class="price-services__subtitle">
                    <?php echo get_field('services')['subtitle']; ?>
                </p>
                <?php if(!empty(get_field('services')['list'])): ?>
                    <ul class="price-services__list list-reset">
                        <?php foreach (get_field('services')['list'] as $item): ?>
                            <li class="price-services__item">
                                <div class="price-services__icon">
                                    <img width="24" height="24" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzhfMjg4NSkiPgo8cGF0aCBkPSJNMTEuOTgwMiAyMy4wMjU1QzcuNzc3NzUgMjMuMDI1OSAzLjkwMjQ3IDIwLjYxNzkgMi4wNDY0NCAxNi44Mjc1QzAuMTY4Mjk3IDEyLjk5MSAwLjczNjk2NiA4LjIwNjEyIDMuNDYyMTUgNC45MjExOUM2LjE4NDM4IDEuNjM5NjYgMTAuNjEgMC4yMDc3ODUgMTQuNzM2MSAxLjI3MzNDMTUuMTkwNSAxLjM5MDYgMTUuNDYzNyAxLjg1NDI5IDE1LjM0NjggMi4zMDkwNUMxNS4yMjk1IDIuNzYzODIgMTQuNzY1NCAzLjAzNjY4IDE0LjMxMTEgMi45MTk4QzEwLjgyMDggMi4wMTgzNCA3LjA3NDc4IDMuMjI5NjQgNC43NzA3OCA2LjAwNzFDMi40NjU1IDguNzg2MjcgMS45ODQzOSAxMi44MzQ1IDMuNTczNTEgMTYuMDgwOEM1LjE1NjY5IDE5LjMxNDMgOC42NDkwMiAyMS40MjA3IDEyLjIzMzYgMjEuMzIyOUMxNS44MTc3IDIxLjIyNTIgMTkuMDcwNCAxOS4wNDUyIDIwLjUyMDEgMTUuNzY5NkMyMS4zNzE0IDEzLjg0NiAyMS41NTE2IDExLjY2NzggMjEuMDI2NyA5LjYzNTg3QzIwLjkwOTQgOS4xODE1MyAyMS4xODI3IDguNzE3ODQgMjEuNjM3NCA4LjYwMDEyQzIyLjA5MDkgOC40ODIzOCAyMi41NTU1IDguNzU2MDkgMjIuNjczMiA5LjIxMDg2QzIzLjI5MjkgMTEuNjExNyAyMy4wODA4IDE0LjE4NTYgMjIuMDc1MiAxNi40NTc4QzIwLjM2MTYgMjAuMzI5NiAxNi41MTY1IDIyLjkwNjUgMTIuMjgwNCAyMy4wMjIxQzEyLjE4IDIzLjAyNDIgMTIuMDc5NyAyMy4wMjU1IDExLjk4MDIgMjMuMDI1NVoiIGZpbGw9IiMxNEE4MDAiLz4KPHBhdGggZD0iTTExLjk3MzIgMTQuNjI1OEMxMS43NTU1IDE0LjYyNTggMTEuNTM3OSAxNC41NDMgMTEuMzcyMiAxNC4zNzY4QzExLjA0MDIgMTQuMDQ0OSAxMS4wNDAyIDEzLjUwNjggMTEuMzcyMiAxMy4xNzQ5TDIxLjU3MjUgMi45NzQ1M0MyMS45MDQgMi42NDI2IDIyLjQ0MjkgMi42NDI2IDIyLjc3NDUgMi45NzQ1M0MyMy4xMDY0IDMuMzA2NDggMjMuMTA2NCAzLjg0NDUzIDIyLjc3NDUgNC4xNzY0OEwxMi41NzQxIDE0LjM3NjhDMTIuNDA4MyAxNC41NDI2IDEyLjE5MDggMTQuNjI1OCAxMS45NzMyIDE0LjYyNThaIiBmaWxsPSIjMTRBODAwIi8+CjxwYXRoIGQ9Ik0xMS45NzMyIDE0LjYyNkMxMS43NTU2IDE0LjYyNiAxMS41MzggMTQuNTQzMSAxMS4zNzIzIDE0LjM3N0w3Ljc2NjAxIDEwLjc3MDdDNy40MzQwOCAxMC40Mzg4IDcuNDM0MDggOS45MDA3MSA3Ljc2NjAxIDkuNTY4NzdDOC4wOTc1MiA5LjIzNjg0IDguNjM2NDQgOS4yMzY4NCA4Ljk2Nzk1IDkuNTY4NzdMMTIuNTc0MiAxMy4xNzVDMTIuOTA2MSAxMy41MDcgMTIuOTA2MSAxNC4wNDUgMTIuNTc0MiAxNC4zNzdDMTIuNDA4NCAxNC41NDI3IDEyLjE5MDggMTQuNjI2IDExLjk3MzIgMTQuNjI2WiIgZmlsbD0iIzE0QTgwMCIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzhfMjg4NSI+CjxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0id2hpdGUiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K">
                                </div>
                                <p class="price-services__text">
                                    <?php echo $item['text']; ?>
                                </p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="price__img">
                <?php
                    $image = get_field('services')['image'];
                    $img_attr = $image['url'] ? 'src=' . $image['url'] : '';
                    $img_attr .= $image['url'] ? ' src=' . $image['url'] : '';
                    $img_attr .= $image['width'] ? ' width=' . $image['width'] : '';
                    $img_attr .= $image['height'] ? ' height=' . $image['height'] : '';
                    $img_attr .= $image['alt'] ? ' alt=' . $image['alt'] : '';
                ?>
                <img <?php esc_attr_e($img_attr); ?> loading="lazy">
            </div>
        </div>
    </div>
</section>