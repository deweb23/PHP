<?php
/**
 * Loops
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
?>
<table>
<?php for ($i = 1; $i < 11; $i++): ?>
    <tr>
        <?php for ($j = 1; $j < 11; $j++): ?>
            <td>
                <?= $i * $j ?>
            </td>
        <?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>
