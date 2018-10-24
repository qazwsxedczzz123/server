<?php
declare(strict_types=1);
/**
 * @copyright Copyright (c) 2018 Joas Schilling <coding@schilljs.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCP\Collaboration\Resources;

use OCP\IUser;

/**
 * @since 15.0.0
 */
interface ICollection {

	/**
	 * @return int
	 * @since 15.0.0
	 */
	public function getId(): int;

	/**
	 * @return string
	 * @since 15.0.0
	 */
	public function getName(): string;

	/**
	 * @return IResource[]
	 * @since 15.0.0
	 */
	public function getResources(): array;

	/**
	 * Adds a resource to a collection
	 *
	 * @param IResource $resource
	 * @throws ResourceException when the resource is already part of the collection
	 * @since 15.0.0
	 */
	public function addResource(IResource $resource);

	/**
	 * Removes a resource from a collection
	 *
	 * @param IResource $resource
	 * @since 15.0.0
	 */
	public function removeResource(IResource $resource);

	/**
	 * Can a user/guest access the collection
	 *
	 * @param IUser $user
	 * @return bool
	 * @since 15.0.0
	 */
	public function canAccess(IUser $user = null): bool;
}
